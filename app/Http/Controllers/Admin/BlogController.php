<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Blog;

class BlogController extends Controller
{
   public function index(){
        $blogs = Blog::orderBy('id', 'desc')->paginate(50);
        return view('admin.blog.index', ['blogs' => $blogs]);
    }

    public function create() {
        return view('admin.blog.create');
      }

      public function store(Request $request) {
        $request->validate([
          'title' => 'required',
          'is_publish' => 'required',
          //'body' => 'required|min:50',
          //'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        
    
        $img = $request->file;
        $imageName= time().'_'.rand().'.'.$img->getClientOriginalExtension();
        $file_type=$img->getClientMimeType();
        $img->move(public_path('storage/blog'),$imageName);
    
    
    
        $blogData = ['title' => $request->title, 'description' => $request->description,'date' => $request->date,  'quote' => $request->quote, 'image' => $imageName, 'is_publish' => $request->is_publish,'upload_by' => $request->upload_by,'created_at' => date('Y-m-d H:i:s')];
        // prd($bannerData); 
        Blog::create($blogData);
        return redirect('/admin/blog')->with(['message' => 'Blog added successfully!', 'status' => 'success']);
      }

      public function destroy(Blog $Blog) {
        Storage::delete('public/categories/' . $Blog->image);
        $Blog->delete();
        return redirect('/admin/blog')->with(['message' => 'Blog deleted successfully!', 'status' => 'info']);
      }

 /**
   * Display the specified resource.
   *
   * @param  AppModelsBanner  $banner
   * @return IlluminateHttpResponse
   */
  public function show(Blog $blog) {
    return view('admin.blog.show', ['blog' => $blog]);
  }


  public function edit(Blog $blog) {
    return view('admin.blog.edit', ['blog' => $blog]);
  }


  public function update(Request $request, Blog $blog) {
    $imageName = '';
    if ($request->hasFile('file')) {

      $img = $request->file;
      $imageName= time().'_'.rand().'.'.$img->getClientOriginalExtension();
      $file_type=$img->getClientMimeType();
      $img->move(public_path('storage/blog'),$imageName);

      if ($blog->image) {
        
        Storage::delete(public_path('storage/blog'), $blog->image);
      }
    } else {
      $imageName = $blog->image;
    }

    $blogData = ['title' => $request->title, 'description' => $request->description,'date' => $request->date,  'quote' => $request->quote,  'image' => $imageName, 'is_publish' => $request->is_publish,'upload_by' => $request->upload_by,'created_at' => date('Y-m-d H:i:s')];
   
    // prd($blogData);
    $blog->update($blogData);
    return redirect('/admin/blog')->with(['message' => 'blog updated successfully!', 'status' => 'success']);
  }
}
