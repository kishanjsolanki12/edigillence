<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Category;

class ProjectController extends Controller
{
    /**
   * Display a listing of the resource.
   *
   * @return IlluminateHttpResponse
   */
  public function index() {
    $Projects = Project::orderBy('id', 'desc')->paginate(50);
    return view('admin.project.index', ['Projects' => $Projects]);
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
            $pages =     Page::                        
                        where('title', 'like', '%'.$query.'%')
                        ->orWhere('description', 'like', '%'.$query.'%')
                        ->orderBy($sort_by, $sort_type)
                        ->paginate(50);

            return view('admin.pages.page_pagination_data', compact('pages'))->render();
        }                                                                                          
    }

  /**
   * Show the form for creating a new resource.
   *
   * @return IlluminateHttpResponse
   */
  public function create() {
    $categories = Category::select('title', 'id')->where('status','1')->get();
    return view('admin.project.create',['categories' => $categories]);
    // return view('admin.project.create');
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
      $img = $request->file;
      $imageName= time().'_'.rand().'.'.$img->getClientOriginalExtension();
      $file_type=$img->getClientMimeType();
      $img->move(public_path('storage/projects'),$imageName);

    $pageData = ['title' => $request->title, 'description' => $request->description, 'category_id' => $request->category_id , 'image'=> $imageName,'status' => $request->status,'project_url'=>$request->project_url, 'created_at' => date('Y-m-d H:i:s')];


    // prd($pageData);
    Project::create($pageData);
    return redirect('/admin/project')->with(['message' => 'Page added successfully!', 'status' => 'success']);
  }

  /**
   * Display the specified resource.  
   *
   * @param  AppModelsPage  $page
   * @return IlluminateHttpResponse
   */
  public function show(Page $page) {
    return view('admin.project.show', ['project' => $project]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  AppModelsPage  $page
   * @return IlluminateHttpResponse
   */
  public function edit(Project $project) {
   
    $categories = Category::select('title', 'id')->where('status','1')->get();
    return view('admin.project.edit', ['project' => $project, 'categories' => $categories]);

  }

  /**
   * Update the specified resource in storage.
   *
   * @param  IlluminateHttpRequest  $request
   * @param  AppModelsPage  $page
   * @return IlluminateHttpResponse
   */
  public function update(Request $request, Project $project) {
    $imageName = '';
    if ($request->hasFile('file')) {
      $img = $request->file;
      $imageName= time().'_'.rand().'.'.$img->getClientOriginalExtension();
      $file_type=$img->getClientMimeType();
      $img->move(public_path('storage/projects'),$imageName);

      if ($project->image) {
        
        Storage::delete(public_path('storage/projects'), $project->image);
      }
    } else {
      $imageName = $project->image;
    }

    $postData = ['title' => $request->title,'description' => $request->description, 'image' => $imageName,'category_id' => $request->category_id ,'status' => $request->status ,'project_url'=>$request->project_url ,   'updated_at' => date('Y-m-d H:i:s')];

    // prd($postData);
    $project->update($postData);
    return redirect('/admin/project')->with(['message' => 'Page updated successfully!', 'status' => 'success']);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  AppModelsPage  $page
   * @return IlluminateHttpResponse
   */
  public function destroy(Project $Project) {
    //Storage::delete('public/pages/' . $page->image);
    Storage::delete(public_path('storage/Projects') , $Project->image);
    $Project->delete();
    return redirect('/admin/project')->with(['message' => 'Page deleted successfully!', 'status' => 'info']);
  }
}
