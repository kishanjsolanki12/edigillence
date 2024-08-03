
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
         
        </div>
        
      </div>
    </div>
    <!-- Main content -->
    <section class="content">
      <div class="row">
      <div class="col-12">
        <div class="box">
          <div class="box-header">  
            
              @if (session('message'))

                                <div class="alert-banner bg-green-100 border-t-4 border-green-500 rounded-b text-green-900 " role="alert">
                                    <div class="flex">
                                      
                                        <div>
                                           {{ session('message') }}
                                        </div>
                                    </div>
                                </div>


                            @endif
              <div class="row">
               
                    <div class="col-md-2">
                    <select class="form-control user_listing appearance-none focus:shadow-outline" name="user_type" id="user_type" required>
                        <option value="">Select Employee</option>
                            @foreach($users as $key => $user)
                                <option value="{{ $user->id }}">{{ $user->name }} {{$user->surname}}</option>
                            @endforeach
                      </select>   
                  </div>
                    <div class="col-md-2">
                      <input type="date" name="date"  placeholder="Date" id="date" class="form-control focus:shadow-outline">
                    </div>                    
                    
                    <div class="col-md-1">
                     <select id="per_page" name="per_page" tabindex="6" class="form-control forum forum_name user_listing" style="margin-left: 10px;">
                         <option value="20">20</option>
                         <option value="50">50</option>
                         <option value="100">100</option>
                    </select>
                    </div>
                     <div class="col-md-1"><input type="button" name="Reset" class="btn btn-primary"  value="Reset Filter" id="reset_filter"></div>
                     <div class="col-md-3"></div>
                    <div class="col-md-3">
                     <a href="/admin/attendance/create" class="btn btn-primary float-right">Add Attendance</a>
                    </div>
              </div>
          </div>
          <div class="box-body">
            <div class="table-responsive">
              <table id="complex_header" class="table table-striped table-bordered display" style="width:100%">
               <thead>
                        <tr class="text-left border-b-2 border-gray-300">
                            <th class="px-4 py-3 sorting" data-sorting_type="asc" data-column_name="name" style="cursor: pointer">Name</th>
                            <th class="px-4 py-3 sorting" data-sorting_type="asc" data-column_name="email" style="cursor: pointer">Mobile</th>
                            <th class="px-4 py-3 sorting" data-sorting_type="asc" data-column_name="email" style="cursor: pointer">Date</th>
                              <th class="px-4 py-3 sorting" data-sorting_type="asc" data-column_name="mobilenumber" style="cursor: pointer">Clock In</th>
                            <th class="px-4 py-3 sorting">Break Start Time</th>
                            <th class="px-4 py-3 sorting">Break End Time</th>
                            <th class="px-4 py-3 sorting">Total Break time</th>
                            <th class="px-4 py-3 sorting">Clock Out</th>
                            <th class="px-4 py-3 sorting">Total Working Time</th>
                            <th class="px-4 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @include('admin.attendance.attendance_pagination_data')
                    </tbody>
              </table>
               <input type="hidden" name="hidden_page" id="hidden_page" value="1" />
                <input type="hidden" name="hidden_column_name" id="hidden_column_name" value="id" />
                <input type="hidden" name="hidden_sort_type" id="hidden_sort_type" value="desc" />
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
  </div>
  </div>
  <script>

$(document).ready(function() {
    function clear_icon() {
        $('#id_icon').html('');
        $('#post_title_icon').html('');
    }

    function fetch_data(page, sort_type, sort_by, date, per_page, user_type) {
        $.ajax({
            url: "/admin/attendance/fetch_data?page=" + page + "&sortby=" + sort_by + "&sorttype=" + sort_type + "&date=" + date + "&per_page=" + per_page + "&user_type=" + user_type,
            success: function(data) {
                $('tbody').html('');
                $('tbody').html(data);
            }
        });
    }

    $(document).on('keyup', '#serach', function() {
        var query = $('#serach').val();
        var column_name = $('#hidden_column_name').val();
        var sort_type = $('#hidden_sort_type').val();
        var per_page = $('#per_page').val();
        var user_type = $('#user_type').val();
        var date = $('#date').val();
        var page = '';
        fetch_data(page, sort_type, column_name, date, per_page, user_type);
    });

    $(document).on('change', '#user_type', function() {
        var user_type = $('#user_type').val();
        var column_name = $('#hidden_column_name').val();
        var sort_type = $('#hidden_sort_type').val();
        var per_page = $('#per_page').val();
        var date = $('#date').val();
        var page = '';
        fetch_data(page, sort_type, column_name, date, per_page, user_type);
    });

    $(document).on('change', '#date', function() {
        var date = $('#date').val();
        var column_name = $('#hidden_column_name').val();
        var sort_type = $('#hidden_sort_type').val();
        var per_page = $('#per_page').val();
        var user_type = $('#user_type').val();
        var page = '';
        fetch_data(page, sort_type, column_name, date  , per_page, user_type);
    });

    $(document).on('change', '#per_page', function() {
        var query = $('#serach').val();
        var column_name = $('#hidden_column_name').val();
        var sort_type = $('#hidden_sort_type').val();
        var page = '1';
        var per_page = $('#per_page').val();
        var user_type = $('#user_type').val();
        var date = $('#date').val();
        fetch_data(page, sort_type, column_name, date, per_page, user_type);
    });

    $(document).on('click', '.sorting', function() {
        var column_name = $(this).data('column_name');
        var order_type = $(this).data('sorting_type');
        var per_page = $('#per_page').val();
        var reverse_order = '';
        if (order_type == 'asc') {
            $(this).data('sorting_type', 'desc');
            reverse_order = 'desc';
            clear_icon();
            $('#' + column_name + '_icon').html('<span class="glyphicon glyphicon-triangle-bottom"></span>');
        }
        if (order_type == 'desc') {
            $(this).data('sorting_type', 'asc');
            reverse_order = 'asc';
            clear_icon();
            $('#' + column_name + '_icon').html('<span class="glyphicon glyphicon-triangle-top"></span>');
        }
        $('#hidden_column_name').val(column_name);
        $('#hidden_sort_type').val(reverse_order);
        var page = '';
        var query = $('#serach').val();
        var user_type = $('#user_type').val();
        var date = $('#date').val();
        fetch_data(page, reverse_order, column_name, date, per_page, user_type);
    });

    $(document).on('click', '.pagination a', function(event) {
        event.preventDefault();
        var page = $(this).attr('href').split('page=')[1];
        $('#hidden_page').val(page);
        var column_name = $('#hidden_column_name').val();
        var sort_type = $('#hidden_sort_type').val();
        var per_page = $('#per_page').val();
        var query = $('#serach').val();
        var user_type = $('#user_type').val();
        var date = $('#date').val();

        $('li').removeClass('active');
        $(this).parent().addClass('active');
        fetch_data(page, sort_type, column_name, date, per_page, user_type);
    });

    $(document).on('click', '#reset_filter', function() {
        $('#serach').val('');
        $('#date').val('');
        $('#user_type').val('');
        $('#hidden_column_name').val('');
        $('#hidden_sort_type').val('desc');
        $(".user_listing").select2();
        var query = $('#serach').val();
        var column_name = $('#hidden_column_name').val();
        var sort_type = $('#hidden_sort_type').val();
        var page = '1';
        var per_page = $('#per_page').val();
        var user_type = $('#user_type').val();
        var date = $('#date').val();
        fetch_data(page, sort_type, column_name, date, per_page, user_type);
    });
});

</script>
  <!-- /.content-wrapper -->
@endsection
  


