<?php

    

namespace App\Http\Controllers\Admin;

    

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Models\User;

use App\Models\Country;
use App\Models\State;
use App\Models\City;
use App\Models\Area;
use Spatie\Permission\Models\Role;

use DB;

use Hash;

use Illuminate\Support\Arr;

    

class UserController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(Request $request)

    {

        $users = User::orderBy('id','DESC')->paginate(20);


        foreach ($users as $user) {
            $roles = $user->getRoleNames();
            
            $user->roleName = isset($roles[0])?$roles[0]:'';
        }
        $roles = Role::pluck('name','id')->all();
       
        return view('admin.users.index', ['users' => $users,'roles'=>$roles]);
    }


    public function fetch_data(Request $request)
{
    if ($request->ajax()) {
        $sort_by = $request->get('sortby');
        $sort_type = $request->get('sorttype');
        $per_page = $request->get('per_page');
        $role = $request->get('role');
        $query = $request->get('query');
        $user_type = $request->get('user_type');

        // Initialize the query
        $queryBuilder = User::select('users.*'); // Ensure only user fields are selected
                      
        // Apply role filter if provided
        if (!empty($role)) {
            $queryBuilder->where('users.user_type', $role);
        }

        // Apply user_type filter if provided
        if (!empty($user_type)) {
            $queryBuilder->where('users.user_type', $user_type);
        }

        // Handle search query
        if (!empty($query)) {
        $query = str_replace(" ", "%", $query);
        $queryBuilder->where(function ($subQuery) use ($query) {
            $subQuery->where('users.name', 'like', "%$query%")
                     ->orWhere('users.email', 'like', "%$query%");
        });
      }
        // Apply sorting and pagination
        $users = $queryBuilder->orderBy($sort_by, $sort_type)
                              ->paginate($per_page);
//                         
    

        return view('admin.users.user_pagination_data', compact('users'))->render();
    }
}


    
    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {
      $roles = Role::all();
        $countries = Country::where('status','1')->where('is_deleted','0')->get();
        return view('admin.users.create',compact('roles','countries'));

    }

    

    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {

       $validatedAttributes = request()->validate([
            'name'  => 'required',
            'email'     => 'required|email|unique:users',
            'user_type'  => 'required',
            'password'  => 'min:6|confirmed',
            'password_confirmation'   => 'required',
            'mobilenumber'  => 'required',
            'address'  => 'sometimes',
            'area'  => 'sometimes',
            'city'  => 'sometimes',
            'state'  => 'sometimes',
            'pincode'  => 'sometimes',
            'country'  => 'sometimes',
            'google_location'  => 'sometimes',
            'latitude'  => 'sometimes',
            'longitude'  => 'sometimes',

        ]);

        // return $validatedAttributes;
        // Create user
        $user = User::create($validatedAttributes);
        
      
        
        return redirect()->route('users.index')->with('message', 'User created successfully');

    }

    

    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {

      
        $user = User::find($id);
        $roles = Role::orderBy('id', 'asc')->pluck('name', 'id')->toArray();
        $userRoles = $user->getRoleNames();
        $user->roleName = $userRoles[0];
        return view('admin.users.show',compact('user','roles'));

    }

    

    /**

     * Show the form for editing the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function edit(User $user)

    {

        //$user = User::find($id);
      
        $roles = Role::all();

        $userRoles = $user->getRoleNames();
        $countries = Country::where('status','1')->get();
        $state = State::where('status','1')->where('country_id',$user->country)->get();
        $city = City::where('status','1')->where('state_id',$user->state)->get();
        $area = Area::where('status','1')->where('city_id',$user->city)->orderBy('area_name','asc')->get();
        return view('admin.users.edit', ['user' => $user, 'roles' => $roles,'countries'=>$countries,'state'=>$state,'city'=>$city,'area'=>$area,['user' => $user],compact('roles')]);

    }

    

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, User $user)

    {

   

        if($request['password'] == '') {
            
            $validatedAttributes = request()->validate([
                'name'  => 'required',
                'email'     => ['required', 'email', \Illuminate\Validation\Rule::unique('users')->ignore($user->id)],
                'user_type'  => 'required',
                'active'    => 'sometimes',
                'mobilenumber'  => 'required',
                'address'  => 'sometimes',
                'area'  => 'sometimes',
                'city'  => 'sometimes',
                'state'  => 'sometimes',
                'pincode'  => 'sometimes',
                'country'  => 'sometimes',
                'google_location'  => 'sometimes',
                'latitude'  => 'sometimes',
                'longitude'  => 'sometimes',
    
            ]);

        } else {

            $validatedAttributes = request()->validate([
                'name'  => 'required',
                'email'     => ['required', 'email', \Illuminate\Validation\Rule::unique('users')->ignore($user->id)],
                'user_type'  => 'required',
                'password'  => 'sometimes|required_with:password_confirmation|string|min:6',
                'password_confirmation'   => 'sometimes|required_with:password|same:password',
                'mobilenumber'  => 'required',
                'address'  => 'sometimes',
                'area'  => 'sometimes',
                'city'  => 'sometimes',
                'state'  => 'sometimes',
                'pincode'  => 'sometimes',
                'country'  => 'sometimes',
                'google_location'  => 'sometimes',
                'latitude'  => 'sometimes',
                'longitude'  => 'sometimes',
    
            ]);
            
        }

        
          // return $user;
          // return $validatedAttributes;
        $user->update($validatedAttributes);
        
   

        return redirect()->route('users.index')->with('message', 'User updated successfully');

    }

    

    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)

    {

        User::find($id)->delete();

        return redirect()->route('users.index')

                        ->with('message','User deleted successfully');


    }
    
     /*
    @Description    : Get list of states by country id
    @Author         : Niral Patel
    @input          : country_id
    @output         : List of all states of that country
    @Date           : 14-05-2022
   *    /*
    
   */
    public function get_state(Request $request){
    $country_id = $request->get('country_id');

    $state = State::where('status','1')->where('country_id',$country_id)->get()->toArray();
    $html = '<option value="">Select State</option>';
    if(!empty($state)){
      foreach($state as $val){
        $html .= "<option value='".$val['id']."'>".ucwords($val['state_name'])."</option>";
      }
    }
    echo $html;
  }
  /*
    @Description    : Get list of city by state id
    @Author         : Niral Patel
    @input          : country_id
    @output         : List of all city of that state
    @Date           : 14-05-2022
   *   
   */
    public function get_city(Request $request){
    $state_id = $request->get('state_id');

    $city = City::where('status','1')->where('state_id',$state_id)->get()->toArray();
    $html = '<option value="">Select City</option>';
    if(!empty($city)){
      foreach($city as $val){
        $html .= "<option value='".$val['id']."'>".ucwords($val['city_name'])."</option>";
      }
    }
    echo $html;
  }
  /*
    @Description    : Get list of areas by country id
    @Author         : Niral Patel
    @input          : country_id
    @output         : List of all areas of that country
    @Date           : 14-05-2022
   * 
   */
    public function get_area(Request $request){
    $city_id = $request->get('city_id');

    $area = Area::where('status','1')->where('city_id',$city_id)->orderBy('area_name','asc')->get()->toArray();
    $html = '<option value="">Select Area</option>';
    if(!empty($area)){
      foreach($area as $val){
        $html .= "<option value='".$val['id']."'>".ucwords($val['area_name'])."</option>";
      }
    }
    echo $html;
  }
}