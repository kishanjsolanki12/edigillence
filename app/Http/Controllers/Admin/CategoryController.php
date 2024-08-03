<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;

use App\Models\Category;

use DB;
use Hash;

class CategoryController extends Controller
{
    /**
   * Display a listing of the resource.
   *
   * @return IlluminateHttpResponse
   */
  public function index() {
    $categories = Category::orderBy('id', 'desc')->paginate(50);
    return view('admin.categories.index', ['categories' => $categories]);
  }

  function fetch_data(Request $request)
    {
        if($request->ajax())
        {
            $sort_by = $request->get('sortby');
            $sort_type = $request->get('sorttype');
            $per_page = $request->get('per_page');
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $categories =     Category::                        
                        where('title', 'like', '%'.$query.'%')
                        ->orWhere('description', 'like', '%'.$query.'%')
                        ->orderBy($sort_by, $sort_type)
                        ->paginate(50);

            return view('admin.categories.category_pagination_data', compact('categories'))->render();
        }                                                                                          
    }

  /**
   * Show the form for creating a new resource.
   *
   * @return IlluminateHttpResponse
   */
  public function create() {
    return view('admin.categories.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  IlluminateHttpRequest  $request
   * @return IlluminateHttpResponse
   */
  public function store(Request $request) {
    $request->validate([
      'title' => 'required',
      'status' => 'required',
    ]);

    if ($request->hasFile('file')) {
        $imageName = time() . '.' . $request->file->extension();
        $request->file->storeAs('public/categories', $imageName);
    } else {
        $imageName = '';
    }

    $categoryData = ['title' => $request->title, 'status' => $request->status, 'description' => $request->description, 'image' => $imageName, 'created_at' => date('Y-m-d H:i:s')];

    Category::create($categoryData);
    return redirect('/admin/categories')->with(['message' => 'Category added successfully!', 'status' => 'success']);
  }

  /**
   * Display the specified resource.
   *
   * @param  AppModelsCategory  $category
   * @return IlluminateHttpResponse
   */
  public function show(Category $category) {
    return view('admin.categories.show', ['category' => $category]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  AppModelsCategory  $category
   * @return IlluminateHttpResponse
   */
  public function edit(category $category) {
    return view('admin.categories.edit', ['category' => $category]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  IlluminateHttpRequest  $request
   * @param  AppModelsCategory  $category
   * @return IlluminateHttpResponse
   */
  public function categoryupdate(Request $request) {
    $imageName = '';
    // prd(1);
    if ($request->hasFile('file')) {
      $img = $request->file;
      $imageName= time().'_'.rand().'.'.$img->getClientOriginalExtension();
      $file_type=$img->getClientMimeType();
      $img->move(public_path('storage/categories'),$imageName);
      // if ($category->image) {
      //   Storage::delete('public/categories' . $category->image);
      // }
      $category_update['image'] = $imageName;
    }
    // else {
    //   $imageName = $category->image;
    // }
    $category_update['title'] = $request->title;
    $category_update['status'] = $request->status;
    $category_update['description'] = $request->description;
    $category_update['updated_at'] =date('Y-m-d H:i:s');
   
    Category::where('id',$request->category_id)->update($category_update);

    // $postData = ['title' => $request->title, 'status' => $request->status, 'description' => $request->description, 'image' => $imageName, 'updated_at' => date('Y-m-d H:i:s')];
    // prd($request->category_id);
    // $category->update($postData);
    return redirect('/admin/categories')->with(['message' => 'Category updated successfully!', 'status' => 'success']);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  AppModelsCategory  $category
   * @return IlluminateHttpResponse
   */
  public function destroy(Category $category) {
    Storage::delete('public/categories/' . $category->image);
    $category->delete();
    return redirect('/admin/categories')->with(['message' => 'Category deleted successfully!', 'status' => 'info']);
  }
}
