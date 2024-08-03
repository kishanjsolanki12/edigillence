<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;

use App\Models\Technology;
use App\Models\Category;

use DB;
use Hash;

class TechnologyController extends Controller
{    
    /**
   * Display a listing of the resource.
   *
   * @return IlluminateHttpResponse
   */
  public function index() {
    $technologies = Technology::orderBy('id', 'desc')->paginate(50);
    return view('admin.technologies.index', ['technologies' => $technologies]);
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
            $technologies =     Technology::                        
                        where('title', 'like', '%'.$query.'%')
                        ->orWhere('description', 'like', '%'.$query.'%')
                        ->orderBy($sort_by, $sort_type)
                        ->paginate(50);

            return view('admin.technologies.technology_pagination_data', compact('technologies'))->render();
        }                                                                                          
    }

  /**
   * Show the form for creating a new resource.
   *
   * @return IlluminateHttpResponse
   */
  public function create() {
    $categories = Category::select('title', 'id')->where('status','1')->get();
    return view('admin.technologies.create',['categories' => $categories]);
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

      $img = $request->file;
      $imageName= time().'_'.rand().'.'.$img->getClientOriginalExtension();
      $file_type=$img->getClientMimeType();
      $img->move(public_path('storage/technologies'),$imageName);

    } else {
      $imageName = '';
    }

    $technologyData = ['title' => $request->title, 'status' => $request->status, 'category_id'=>$request->category_id,'description' => $request->description, 'image' => $imageName, 'created_at' => date('Y-m-d H:i:s')];
   
  //  return $technologyData;
    $technology_new = Technology::create($technologyData);

    if(!empty($request->category_id)) {
        $technology_new->categories()->attach($request->category_id);
    }
    return redirect('/admin/technologies')->with(['message' => 'Technology added successfully!', 'status' => 'success']);
  }

  /**
   * Display the specified resource.
   *
   * @param  AppModelsTechnology  $technology
   * @return IlluminateHttpResponse
   */
  public function show(Technology $technology) {
    return view('admin.technologies.show', ['technology' => $technology]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  AppModelsTechnology  $technology
   * @return IlluminateHttpResponse
   */
  public function edit(Technology $technology) {
    $tech_cats = $technology->categories;//dd($tech_cats);
    $selectedCategory = [];
    foreach ($tech_cats as $tech_cat) {
        array_push($selectedCategory, $tech_cat->id);
    }
    $categories = Category::select('title', 'id')->where('status','1')->get();
    return view('admin.technologies.edit', ['technology' => $technology, 'categories' => $categories, 'selectedCategory' => $selectedCategory]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  IlluminateHttpRequest  $request
   * @param  AppModelsTechnology  $technology
   * @return IlluminateHttpResponse
   */
  public function update(Request $request, Technology $technology) {
    $imageName = '';
    if ($request->hasFile('file')) {
     
      $img = $request->file;
      $imageName= time().'_'.rand().'.'.$img->getClientOriginalExtension();
      $file_type=$img->getClientMimeType();
      $img->move(public_path('storage/technologies'),$imageName);
      
      if ($technology->image) {
        Storage::delete(public_path('storage/technologies') . $technology->image);
      }
    } else {
      $imageName = $technology->image;
    }

    $postData = ['title' => $request->title, 'status' => $request->status, 'category_id'=>$request->category_id,'description' => $request->description, 'image' => $imageName, 'updated_at' => date('Y-m-d H:i:s')];
    // return $postData;
    $technology->update($postData);

    if(!empty($request->category_id)) {
      $technology->categories()->sync($request->category_id);
    }
    return redirect('/admin/technologies')->with(['message' => 'Technology updated successfully!', 'status' => 'success']);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  AppModelsTechnology  $technology
   * @return IlluminateHttpResponse
   */
  public function destroy(Technology $technology) {
    Storage::delete('public/technologies/' . $technology->image);
    $technology->delete();
    return redirect('/admin/technologies')->with(['message' => 'Technology deleted successfully!', 'status' => 'info']);
  }
}
