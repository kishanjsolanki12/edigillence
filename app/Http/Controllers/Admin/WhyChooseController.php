<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;

use App\Models\WhyChoose;

use DB;
use Hash;

class WhyChooseController extends Controller
{
    /**
   * Display a listing of the resource.
   *
   * @return IlluminateHttpResponse
   */
  public function index() {
    $whyChooses = WhyChoose::orderBy('id', 'desc')->paginate(3);
    return view('admin.whyChooses.index', ['whyChooses' => $whyChooses]);
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
            $whyChooses =     WhyChoose::                        
                        where('title', 'like', '%'.$query.'%')
                        ->orWhere('description', 'like', '%'.$query.'%')
                        ->orderBy($sort_by, $sort_type)
                        ->paginate(5);

            return view('admin.whyChooses.whyChoose_pagination_data', compact('whyChooses'))->render();
        }                                                                                          
    }

  /**
   * Show the form for creating a new resource.
   *
   * @return IlluminateHttpResponse
   */
  public function create() {
    return view('admin.whyChooses.create');
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
    
    $whyChooseData = ['title' => $request->title, 'description' => $request->description, 'status' => $request->status, 'created_at' => date('Y-m-d H:i:s')];

    WhyChoose::create($whyChooseData);
    return redirect('/admin/whyChooses')->with(['message' => 'WhyChoose added successfully!', 'status' => 'success']);
  }

  /**
   * Display the specified resource.
   *
   * @param  AppModelsWhyChoose  $whyChoose
   * @return IlluminateHttpResponse
   */
  public function show(WhyChoose $whyChoose) {
    return view('admin.whyChooses.show', ['whyChoose' => $whyChoose]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  AppModelsWhyChoose  $whyChoose
   * @return IlluminateHttpResponse
   */
  public function edit(WhyChoose $whyChoose) {
    return view('admin.whyChooses.edit', ['whyChoose' => $whyChoose]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  IlluminateHttpRequest  $request
   * @param  AppModelsWhyChoose  $whyChoose
   * @return IlluminateHttpResponse
   */
  public function update(Request $request, WhyChoose $whyChoose) {
    $postData = ['title' => $request->title, 'description' => $request->description, 'status' => $request->status, 'updated_at' => date('Y-m-d H:i:s')];

    $whyChoose->update($postData);
    return redirect('/admin/whyChooses')->with(['message' => 'WhyChoose updated successfully!', 'status' => 'success']);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  AppModelsWhyChoose  $whyChoose
   * @return IlluminateHttpResponse
   */
  public function destroy(WhyChoose $whyChoose) {
    //Storage::delete('public/whyChooses/' . $whyChoose->image);
    $whyChoose->delete();
    return redirect('/admin/whyChooses')->with(['message' => 'WhyChoose deleted successfully!', 'status' => 'info']);
  }
}
