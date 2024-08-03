<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;

use App\Models\Testimonial;

use DB;
use Hash;

class TestimonialController extends Controller
{
      /**
   * Display a listing of the resource.
   *
   * @return IlluminateHttpResponse
   */
  public function index() {
    $testimonials = Testimonial::orderBy('id', 'desc')->paginate(50);
    return view('admin.testimonials.index', ['testimonials' => $testimonials]);
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
            $testimonials =     Testimonial::                        
                        where('client_name', 'like', '%'.$query.'%')
                        ->orWhere('client_company', 'like', '%'.$query.'%')
                        ->orderBy($sort_by, $sort_type)
                        ->paginate(50);

            return view('admin.testimonials.testimonial_pagination_data', compact('testimonials'))->render();
        }                                                                                          
    }

  /**
   * Show the form for creating a new resource.
   *
   * @return IlluminateHttpResponse
   */
  public function create() {
    return view('admin.testimonials.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  IlluminateHttpRequest  $request
   * @return IlluminateHttpResponse
   */
  public function store(Request $request) {
    
      $request->validate([
        'client_name' => 'required',
        'status' => 'required',
        'client_company' => 'required',
        //'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);
    
    if ($request->hasFile('file')) {
      // $imageName = time() . '.' . $request->file->extension();
      // $request->file->storeAs('public/testimonials', $imageName);

      $img = $request->file;
      $imageName= time().'_'.rand().'.'.$img->getClientOriginalExtension();
      $file_type=$img->getClientMimeType();
      $img->move(public_path('storage/testimonials'),$imageName);
    } else {
      $imageName = '';
    }

    $testimonialData = ['client_name' => $request->client_name, 'comment' => $request->comment,'stars'=> $request->stars, 'status' => $request->status, 'client_company' => $request->client_company, 'client_photo' => $imageName, 'created_at' => date('Y-m-d H:i:s')];

    Testimonial::create($testimonialData);
    return redirect('/admin/testimonials')->with(['message' => 'Testimonial added successfully!', 'status' => 'success']);
  }

  /**
   * Display the specified resource.
   *
   * @param  AppModelsTestimonial  $testimonial
   * @return IlluminateHttpResponse
   */
  public function show(Testimonial $testimonial) {
    return view('admin.testimonials.show', ['testimonial' => $testimonial]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  AppModelsTestimonial  $testimonial
   * @return IlluminateHttpResponse
   */
  public function edit(Testimonial $testimonial) {
    return view('admin.testimonials.edit', ['testimonial' => $testimonial]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  IlluminateHttpRequest  $request
   * @param  AppModelsTestimonial  $testimonial
   * @return IlluminateHttpResponse
   */
  public function update(Request $request, Testimonial $testimonial) {
    $imageName = '';
    if ($request->hasFile('file')) {
      // $imageName = time() . '.' . $request->file->extension();
      // $request->file->storeAs('public/testimonials', $imageName);
      $img = $request->file;
      $imageName= time().'_'.rand().'.'.$img->getClientOriginalExtension();
      $file_type=$img->getClientMimeType();
      $img->move(public_path('storage/testimonials'),$imageName);
      if ($testimonial->client_photo) {
        Storage::delete('public/testimonials/' . $testimonial->client_photo);
      }
    } else {
      $imageName = $testimonial->client_photo;
    }

    $postData = ['client_name' => $request->client_name, 'comment' => $request->comment,'stars'=> $request->stars, 'status' => $request->status, 'client_company' => $request->client_company, 'client_photo' => $imageName, 'updated_at' => date('Y-m-d H:i:s')];

    $testimonial->update($postData);
    return redirect('/admin/testimonials')->with(['message' => 'Testimonial updated successfully!', 'status' => 'success']);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  AppModelsTestimonial  $testimonial
   * @return IlluminateHttpResponse
   */
  public function destroy(Testimonial $testimonial) {
    Storage::delete('public/testimonials/' . $testimonial->image);
    $testimonial->delete();
    return redirect('/admin/testimonials')->with(['message' => 'Testimonial deleted successfully!', 'status' => 'info']);
  }
}
