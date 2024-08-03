<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;

use App\Models\Hiring;
use App\Models\Hiringinfo;

use DB;
use Hash;

class HiringController extends Controller
{
    /**
   * Display a listing of the resource.
   *
   * @return IlluminateHttpResponse
   */
  public function index() {
    $hirings = Hiring::orderBy('id', 'desc')->paginate(50);
    return view('admin.hiring.index', ['hirings' => $hirings]);
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
    return view('admin.hiring.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  IlluminateHttpRequest  $request
   * @return IlluminateHttpResponse
   */
  public function store(Request $request) {
  

    // $imageName = time() . '.' . $request->file->extension();
    // $request->file->storeAs('public/banners', $imageName);

    $img = $request->file;
    $imageName= time().'_'.rand().'.'.$img->getClientOriginalExtension();
    $file_type=$img->getClientMimeType();
    $img->move(public_path('storage/hiring'),$imageName);


    $img = $request->service_icon;
    $service_icon= time().'_'.rand().'.'.$img->getClientOriginalExtension();
    $file_type=$img->getClientMimeType();
    $img->move(public_path('storage/hiring'),$service_icon);



    $hiringdata = ['title' => $request->title, 'description' => $request->description,'eduction' => $request->eduction,'position' => $request->position,'skill' => $request->skill,'experience' => $request->experience, 'start_date' => $request->start_date,'end_date' => $request->end_date,'status' => $request->status,'status' => $request->status, 'image' => $imageName, 'service_icon'=>$service_icon, 'created_at' => date('Y-m-d H:i:s')];
    // prd($hiringdata); 
    Hiring::create($hiringdata);
    return redirect('/admin/hiring')->with(['message' => 'Banner added successfully!', 'status' => 'success']);
  }

  /**
   * Display the specified resource.
   *
   * @param  AppModelsBanner  $banner
   * @return IlluminateHttpResponse
  */
  // public function show(Banner $banner) {
  //   return view('admin.banners.show', ['banner' => $banner]);
  // }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  AppModelsBanner  $banner
   * @return IlluminateHttpResponse
   */
  public function edit(Hiring $hiring) {
    return view('admin.hiring.edit', ['hiring' => $hiring]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  IlluminateHttpRequest  $request
   * @param  AppModelsBanner  $banner
   * @return IlluminateHttpResponse
   */
  public function update(Request $request, Hiring $hiring) {
    $imageName = '';
    if ($request->hasFile('file')) {

      $img = $request->file;
      $imageName= time().'_'.rand().'.'.$img->getClientOriginalExtension();
      $file_type=$img->getClientMimeType();
      $img->move(public_path('storage/hiring'),$imageName);

      if ($hiring->image) {
        
        Storage::delete(public_path('storage/hiring'), $hiring->image);
      }
    } else {
      $imageName = $hiring->image;
    }

    if ($request->hasFile('service_icon')) {

      $img = $request->service_icon;
      $service_icon= time().'_'.rand().'.'.$img->getClientOriginalExtension();
      $file_type=$img->getClientMimeType();
      $img->move(public_path('storage/hiring'),$service_icon);

      if ($hiring->service_icon) {
        
        Storage::delete(public_path('storage/hiring'), $hiring->service_icon);
      }
    } else {
      $service_icon = $hiring->service_icon;
    }

    $hiringdata = ['title' => $request->title, 'description' => $request->description,'eduction' => $request->eduction,'position' => $request->position,'skill' => $request->skill,'experience' => $request->experience, 'start_date' => $request->start_date,'end_date' => $request->end_date,'status' => $request->status, 'image' => $imageName,'service_icon'=>$service_icon, 'created_at' => date('Y-m-d H:i:s')];
    // prd($hiringdata); 
     $hiring->update($hiringdata);
    return redirect('/admin/hiring')->with(['message' => 'Banner updated successfully!', 'status' => 'success']);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  AppModelsBanner  $banner
   * @return IlluminateHttpResponse
   */
  public function destroy(Hiring $hiring) {
    Storage::delete(public_path('storage/hiring') , $hiring->image);
    $hiring->delete();
    return redirect('/admin/hiring')->with(['message' => 'Hiring deleted successfully!', 'status' => 'info']);
  }


  public function hiring_info() {
    $hirings=Hiringinfo::paginate(50);
    return view('admin.hiring.index2', ['hirings' => $hirings]);

  }
}
