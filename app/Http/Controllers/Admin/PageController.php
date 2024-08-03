<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;

use App\Models\Page;

use DB;
use Hash;

class PageController extends Controller
{
    /**
   * Display a listing of the resource.
   *
   * @return IlluminateHttpResponse
   */
  public function index() {
    $pages = Page::orderBy('id', 'desc')->paginate(50);
    return view('admin.pages.index', ['pages' => $pages]);
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
    return view('admin.pages.create');
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
    
    $pageData = ['title' => $request->title, 'description' => $request->description, 'status' => $request->status, 'created_at' => date('Y-m-d H:i:s')];

    Page::create($pageData);
    return redirect('/admin/pages')->with(['message' => 'Page added successfully!', 'status' => 'success']);
  }

  /**
   * Display the specified resource.
   *
   * @param  AppModelsPage  $page
   * @return IlluminateHttpResponse
   */
  public function show(Page $page) {
    return view('admin.pages.show', ['page' => $page]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  AppModelsPage  $page
   * @return IlluminateHttpResponse
   */
  public function edit(Page $page) {
    return view('admin.pages.edit', ['page' => $page]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  IlluminateHttpRequest  $request
   * @param  AppModelsPage  $page
   * @return IlluminateHttpResponse
   */
  public function update(Request $request, Page $page) {
    $postData = ['title' => $request->title, 'description' => $request->description, 'status' => $request->status, 'updated_at' => date('Y-m-d H:i:s')];

    $page->update($postData);
    return redirect('/admin/pages')->with(['message' => 'Page updated successfully!', 'status' => 'success']);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  AppModelsPage  $page
   * @return IlluminateHttpResponse
   */
  public function destroy(Page $page) {
    //Storage::delete('public/pages/' . $page->image);
    $page->delete();
    return redirect('/admin/pages')->with(['message' => 'Page deleted successfully!', 'status' => 'info']);
  }
}
