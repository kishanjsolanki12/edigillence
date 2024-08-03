@extends('admin.layouts.main')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h4 class="page-title">{{ __('messages.attendance_management') }}</h4>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                {{-- <li class="breadcrumb-item" aria-current="page">{{ __('messages.attendance_management') }}</li> --}}
                                <li class="breadcrumb-item active" aria-current="page">Add User</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="container">
                    <div class="box-header">                        
                        <a href="{{route('attendance.index')}}"  class="btn btn-secondary fa fa-arrow-left btn-sm float-right">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main content -->
        <form method="POST" action="{{ route('attendance.store') }}" class="form" novalidate data-parsley-validate="">
            <section class="content">
              <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-body">
                            
                                @csrf
                                <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">

                                        <div class="form-label">
                                            <label for="name">Select Employee<span style="color:#F00">*</span></label>
                                        </div>

                                        <div class="input-block">

                                        <select class="form-control user_listing appearance-none focus:shadow-outline" name="user_type" id="user_type" required>
                                            <option value="">Select Employee</option>
                                                @foreach($users as $key => $user)
                                                    <option value="{{ $user->id }}">{{ $user->name }} {{$user->surname}}</option>
                                                @endforeach
                                        </select>
                                        @error('user_type')
                                            <p class="help invalid-feedback">{{ $errors->first('user_type') }}</p>
                                        @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">

                                        <div class="form-label">
                                            <label for="clock_in">Clock In Time<span style="color:#F00">*</span></label>
                                        </div>

                                        <div class="input-block">
                                            <input type="time" name="clock_in" id="clock_in" class="form-control focus:shadow-outline @error('clock_in') is-invalid @enderror" value="" autocomplete="off" required/>
                                        
                                            @error('clock_in')
                                                <p class="help invalid-feedback">{{ $errors->first('clock_in') }}</p>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">

                                        <div class="form-label">
                                            <label for="break_start">Break Start Time<span style="color:#F00">*</span></label>
                                        </div>

                                        <div class="input-block">
                                            <input type="time" name="break_start" id="break_start" class="form-control focus:shadow-outline @error('break_start') is-invalid @enderror" value="" autocomplete="off" required/>
                                         
                                            @error('break_start')
                                                <p class="help invalid-feedback">{{ $errors->first('break_start') }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">

                                        <div class="form-label">
                                            <label for="break_end">Break End Time<span style="color:#F00">*</span></label>
                                        </div>

                                        <div class="input-block">
                                            <input type="time" name="break_end" id="break_end" class="form-control focus:shadow-outline @error('break_end') is-invalid @enderror" value="" autocomplete="off" required/>
                                         
                                            @error('break_end')
                                                <p class="help invalid-feedback">{{ $errors->first('break_end') }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="col-md-4">
                                    <div class="form-group">

                                        <div class="form-label">
                                            <label for="clock_out">Clock Out Time<span style="color:#F00">*</span></label>
                                        </div>

                                        <div class="input-block">
                                            <input type="time" name="clock_out" id="clock_out" class="form-control focus:shadow-outline @error('clock_out') is-invalid @enderror" value="" autocomplete="off" required/>
                                         
                                            @error('clock_out')
                                                <p class="help invalid-feedback">{{ $errors->first('clock_out') }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                
                          
                                
                        </div><!-- row   -->
                           
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary" name="submit">
                              <i class="ti-save-alt"></i> Save
                            </button>
                            <a href="{{route('attendance.index')}}"  class="btn btn-secondary">Cancel</a>
                        </div>  
                       
                    </div>
                </div>
              </div>
            </section>
        </form>
    </div>
  </div>
  <script>
        function setCurrentTime() {
            // Get the current date and time
            var now = new Date();

            // Format the time as HH:MM
            var hours = now.getHours().toString().padStart(2, '0');
            var minutes = now.getMinutes().toString().padStart(2, '0');
            var currentTime = hours + ':' + minutes;

            // Set the value of the time input field
            document.getElementById('clock_in').value = currentTime;
        }
    </script>
<script type="text/javascript">
     $(document).on("change",".country",function(){
        var country_id = $(this).val();
        var url = "/admin/attendance/get_state";

        $.ajax({
                type: "get",
                url: url,
                data: {
                        result_type: 'ajax',country_id:country_id
                },
                success: function(html) {
                    $(".statecls").html(html);
                }
        });
    });
    $(document).on("change",".state",function(){
        var state_id = $(this).val();
        var url = "/admin/attendance/get_city";

        $.ajax({
                type: "get",
                url: url,
                data: {
                        result_type: 'ajax',state_id:state_id
                },
                success: function(html) {
                    $(".citycls").html(html);
                }
        });
    });

    
    $(document).on("change",".city",function(){
        var city_id = $(this).val();
        var url = "/admin/attendance/get_area";

        $.ajax({
                type: "get",
                url: url,
                data: {
                        result_type: 'ajax',city_id:city_id
                },
                success: function(html) {
                    $(".areacls").html(html);
                }
        });
    })
</script>
@endsection
  
  