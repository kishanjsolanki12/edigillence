<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;

use App\Models\Banner;

use DB;
use Hash;

class BannerController extends Controller
{
    /**
   * Display a listing of the resource.
   *
   * @return IlluminateHttpResponse
   */
  public function index() {
    $banners = Banner::orderBy('id', 'desc')->paginate(50);
    return view('admin.banners.index', ['banners' => $banners]);
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
            $banners =     Banner::                        
                        where('title', 'like', '%'.$query.'%')
                        ->orWhere('body', 'like', '%'.$query.'%')
                        ->orderBy($sort_by, $sort_type)
                        ->paginate(50);

            return view('admin.banners.banner_pagination_data', compact('banners'))->render();
        }                                                                                          
    }

  /**
   * Show the form for creating a new resource.
   *
   * @return IlluminateHttpResponse
   */
  public function create() {
    return view('admin.banners.create');
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
      'is_publish' => 'required',
      //'body' => 'required|min:50',
      //'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // $imageName = time() . '.' . $request->file->extension();
    // $request->file->storeAs('public/banners', $imageName);

    $img = $request->file;
    $imageName= time().'_'.rand().'.'.$img->getClientOriginalExtension();
    $file_type=$img->getClientMimeType();
    $img->move(public_path('storage/banners'),$imageName);



    $bannerData = ['title' => $request->title, 'is_publish' => $request->is_publish,'priority' => $request->priority, 'body' => $request->body, 'banner_image' => $imageName, 'created_at' => date('Y-m-d H:i:s')];
    // prd($bannerData); 
    Banner::create($bannerData);
    return redirect('/admin/banners')->with(['message' => 'Banner added successfully!', 'status' => 'success']);
  }

  /**
   * Display the specified resource.
   *
   * @param  AppModelsBanner  $banner
   * @return IlluminateHttpResponse
   */
  public function show(Banner $banner) {
    return view('admin.banners.show', ['banner' => $banner]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  AppModelsBanner  $banner
   * @return IlluminateHttpResponse
   */
  public function edit(Banner $banner) {
    return view('admin.banners.edit', ['banner' => $banner]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  IlluminateHttpRequest  $request
   * @param  AppModelsBanner  $banner
   * @return IlluminateHttpResponse
   */
  public function update(Request $request, Banner $banner) {
    $imageName = '';
    if ($request->hasFile('file')) {

      $img = $request->file;
      $imageName= time().'_'.rand().'.'.$img->getClientOriginalExtension();
      $file_type=$img->getClientMimeType();
      $img->move(public_path('storage/banners'),$imageName);

      if ($banner->banner_image) {
        
        Storage::delete(public_path('storage/banners'), $banner->banner_image);
      }
    } else {
      $imageName = $banner->banner_image;
    }

    $postData = ['title' => $request->title, 'is_publish' => $request->is_publish,'priority' => $request->priority, 'body' => $request->body, 'banner_image' => $imageName, 'updated_at' => date('Y-m-d H:i:s')];

    // prd($postData);
    $banner->update($postData);
    return redirect('/admin/banners')->with(['message' => 'Banner updated successfully!', 'status' => 'success']);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  AppModelsBanner  $banner
   * @return IlluminateHttpResponse
   */
  public function destroy(Banner $banner) {
    Storage::delete(public_path('storage/banners') , $banner->image);
    $banner->delete();
    return redirect('/admin/banners')->with(['message' => 'Banner deleted successfully!', 'status' => 'info']);
  }
}
