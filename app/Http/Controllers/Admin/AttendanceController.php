<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\User;
use App\Models\Role;
use Carbon\Carbon;

use DB;
class AttendanceController extends Controller
{
    public function find_time($startTime,$endTime)
    {

        $start = Carbon::parse($startTime);
        $end = Carbon::parse($endTime);

        $interval = $start->diff($end);

        // Calculate total hours and minutes
        $totalHours = $interval->days * 24 + $interval->h;
        $totalMinutes = $interval->i;
    
        // Format the result as HH:MM
        return sprintf('%02d:%02d', $totalHours, $totalMinutes);
}
    //
    public function index(){
      $users = User::whereIn('user_type', ['3', '4'])->get();
        $attendances = DB::table('attendance')
        ->leftJoin('users', 'users.id', '=', 'attendance.user_id')
        ->select('users.name', 'users.mobilenumber', 'attendance.*')
        ->where("date",date('Y-m-d'))->paginate(20);

//    return $attendances;
        
        return view('admin.attendance.index', ['users'=>$users,'attendances'=>$attendances]);

    }



    public function create(){
      $users = User::whereIn('user_type', ['3', '4'])->get();
        // return $users;
        return view('admin.attendance.create',['users'=>$users]);

        // return view('admin.attendance.create');

    }


    public function store(Request $request)

    {
    

       $time  = $this->find_time($request->clock_in,$request->clock_out);
       $break_time = $this->find_time($request->break_start,$request->break_end);
     
        
  $postdata = ['user_id'=>$request->user_type ,'date'=>date('Y-m-d'),'clock_in'=>$request->clock_in,'break_start'=>$request->break_start,'break_end'=>$request->break_end,'clock_out'=>$request->clock_out,'break_time'=>$break_time,'total_time'=>$time, 'created_at' => date('Y-m-d H:i:s')];

  // return $postdata;

        $user = Attendance::create($postdata);
    
        
        return redirect()->route('attendance.index')->with('message', 'Attendance created successfully');

    }

    

    public function edit(Attendance $attendance) {

      $users = User::whereIn('user_type', ['3', '4'])->get();
        return view('admin.attendance.edit', ['attendance' => $attendance,'users'=>$users]);
      }

      public function update(Request $request)

      {

    $time  = $this->find_time($request->clock_in,$request->clock_out);
    $break_time = $this->find_time($request->break_start,$request->break_end);
    
        
      $postdata = ['user_id'=>$request->user_type ,'date'=>date('Y-m-d'),'clock_in'=>$request->clock_in,'break_start'=>$request->break_start,'break_end'=>$request->break_end,'clock_out'=>$request->clock_out,'break_time'=>$break_time,'total_time'=>$time, 'created_at' => date('Y-m-d H:i:s')];

        
            $id = $request->route('id');
        // return $postdata;
        // return $attendance;
          Attendance::where('id',$id)->update($postdata);
          
  
        
  
          return redirect()->route('attendance.index')->with('message', 'Attendance updated successfully');

      }

    public function destroy(Attendance $attendance) {
        $attendance->delete();
        return redirect('/admin/attendance')->with(['message' => 'Attendances deleted successfully!', 'status' => 'info']);
      }


    

 

      public function fetch_data(Request $request)
      {
          if ($request->ajax()) {
              $sort_by = $request->get('sortby');
              $sort_type = $request->get('sorttype');
              $per_page = $request->get('per_page');
              $date = $request->get('date');
              $query = $request->get('query');
              $user_type = $request->get('user_type');

              $queryBuilder = DB::table('attendance')
                  ->leftJoin('users', 'users.id', '=', 'attendance.user_id')
                  ->select('users.name', 'users.mobilenumber', 'attendance.*');
      
              if (!empty($user_type)) {
                  $queryBuilder->where('attendance.user_id', $user_type);
              }
    
              if (!empty($date)) {
                  $queryBuilder->whereDate('attendance.date', $date);
              }
      
              // Apply search query if provided
              if (!empty($query)) {
                  $queryBuilder->where(function($subQuery) use ($query) {
                      $subQuery->where('users.name', 'like', '%' . $query . '%')
                               ->orWhere('users.email', 'like', '%' . $query . '%');
                  });
              }
      
              // Apply sorting and pagination
              $attendances = $queryBuilder->orderBy($sort_by, $sort_type)
                  ->paginate($per_page);

                  
              return view('admin.attendance.attendance_pagination_data', compact('attendances'))->render();
          }
      }      
    
  }


