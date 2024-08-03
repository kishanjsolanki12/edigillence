<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;

use App\Models\Team;

use DB;
use Hash;

class TeamController extends Controller
{    
    /**
   * Display a listing of the resource.
   *
   * @return IlluminateHttpResponse
   */
  public function index() {
    $teams = Team::orderBy('id', 'desc')->paginate(50);
    return view('admin.teams.index', ['teams' => $teams]);
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
            $teams =     Team::                        
                        where('name', 'like', '%'.$query.'%')
                        ->orWhere('designation', 'like', '%'.$query.'%')
                        ->orderBy($sort_by, $sort_type)
                        ->paginate(50);

            return view('admin.teams.team_pagination_data', compact('teams'))->render();
        }                                                                                          
    }

  /**
   * Show the form for creating a new resource.
   *
   * @return IlluminateHttpResponse
   */
  public function create() {
    return view('admin.teams.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  IlluminateHttpRequest  $request
   * @return IlluminateHttpResponse
   */
  public function store(Request $request) {
    
      $request->validate([
        'name' => 'required',
        'status' => 'required',
        'designation' => 'required',
        //'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);
    
    if ($request->hasFile('file')) {
      // $imageName = time() . '.' . $request->file->extension();
      // $request->file->storeAs('public/teams', $imageName);

      $img = $request->file;
      $imageName= time().'_'.rand().'.'.$img->getClientOriginalExtension();
      $file_type=$img->getClientMimeType();
      $img->move(public_path('storage/teams'),$imageName);
    } else {
      $imageName = '';
    }

    

    $teamData = ['name' => $request->name, 'status' => $request->status, 'designation' => $request->designation,'facebook_id' => $request->facebook_id,'insta_id' => $request->insta_id,'twitter_id' => $request->twitter_id,'linkedin_id' => $request->linkedin_id, 'photo' => $imageName, 'created_at' => date('Y-m-d H:i:s')];

    Team::create($teamData);
    return redirect('/admin/teams')->with(['message' => 'Team added successfully!', 'status' => 'success']);
  }

  /**
   * Display the specified resource.
   *
   * @param  AppModelsTeam  $team
   * @return IlluminateHttpResponse
   */
  public function show(Team $team) {
    return view('admin.teams.show', ['team' => $team]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  AppModelsTeam  $team
   * @return IlluminateHttpResponse
   */
  public function edit(Team $team) {
    return view('admin.teams.edit', ['team' => $team]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  IlluminateHttpRequest  $request
   * @param  AppModelsTeam  $team
   * @return IlluminateHttpResponse
   */
  public function update(Request $request, Team $team) {
    $imageName = '';
    if ($request->hasFile('file')) {
      // $imageName = time() . '.' . $request->file->extension();
      // $request->file->storeAs('public/teams', $imageName);
      
      $img = $request->file;
      $imageName= time().'_'.rand().'.'.$img->getClientOriginalExtension();
      $file_type=$img->getClientMimeType();
      $img->move(public_path('storage/teams'),$imageName);

      if ($team->photo) {
        Storage::delete('storage/teams/' . $team->photo);
      }
    } else {
      $imageName = $team->photo;
    }

    $postData = ['name' => $request->name, 'status' => $request->status, 'designation' => $request->designation,'facebook_id' => $request->facebook_id,'insta_id' => $request->insta_id,'twitter_id' => $request->twitter_id,'linkedin_id' => $request->linkedin_id, 'photo' => $imageName, 'updated_at' => date('Y-m-d H:i:s')];

    $team->update($postData);
    return redirect('/admin/teams')->with(['message' => 'Team updated successfully!', 'status' => 'success']);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  AppModelsTeam  $team
   * @return IlluminateHttpResponse
   */
  public function destroy(Team $team) {
    Storage::delete('public/teams/' . $team->image);
    $team->delete();
    return redirect('/admin/teams')->with(['message' => 'Team deleted successfully!', 'status' => 'info']);
  }
}
