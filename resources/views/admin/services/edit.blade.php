
@extends('admin.layouts.main')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h4 class="page-title">{{ __('messages.service_management') }}</h4>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                {{-- <li class="breadcrumb-item" aria-current="page">{{ __('messages.service_management') }}</li> --}}
                                <li class="breadcrumb-item active" aria-current="page">Add Service</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="container">
                    <div class="box-header">                        
                        <a href="{{route('services.index')}}"  class="btn btn-secondary fa fa-arrow-left btn-sm float-right">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main content -->
        <form method="POST" action="{{ route('services.update',$service) }}" class="form" novalidate data-parsley-validate="" enctype="multipart/form-data">
            <section class="content">
              <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-body">                            
                            @csrf
                            {{ method_field('PUT') }}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-label">
                                            <label for="title">Title<span style="color:#F00">*</span></label>
                                        </div>
                                        <div class="input-block">
                                            <input type="text" name="title" id="title" class="form-control focus:shadow-outline @error('title') is-invalid @enderror" value="{{ !empty($service->title)?$service->title:''}}" autocomplete="off" required/>
                                          
                                            @error('title')
                                                <p class="help invalid-feedback">{{ $errors->first('title') }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="id" id="id" value="{{$service->id}}"/>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-label">
                                            <label for="description">Description</label>
                                        </div>
                                        <div class="input-block">
                                            <textarea name="description" id="description" class="form-control focus:shadow-outline @error('description') is-invalid @enderror" value="{{ old('description') }}"  autocomplete="off">{{ !empty($service->description)?$service->description:''}}</textarea>
                                            @error('description')
                                                <p class="help invalid-feedback">{{ $errors->first('description') }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>  
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-label">
                                            <label for="role">Service Logo(icon)</label>
                                        </div>
                                        <div class="input-block">
                                            <input type="file" name="service_logo" id="service_logo" accept="image/*" class="form-control @error('service_logo') is-invalid @enderror">
                                            @error('service_logo')
                                                <p class="help invalid-feedback">{{ $errors->first('service_logo') }}</p>
                                            @enderror
                                            @if($service->service_logo!='')
                                                <img src="{{ Storage::disk()->url('services/'.$service->service_logo) }}" class="img-fluid img-thumbnail" style="width:auto;height:150px;">
                                            @endif
                                        </div>
                                    </div>
                                </div>                            
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-label">
                                            <label for="role">Service image</label>
                                        </div>
                                        <div class="input-block">
                                            <input type="file" name="service_image" id="service_image" accept="image/*" class="form-control @error('service_image') is-invalid @enderror">
                                            @error('service_image')
                                                <p class="help invalid-feedback">{{ $errors->first('service_image') }}</p>
                                            @enderror
                                            @if($service->service_image!='')
                                                <img src="{{ Storage::disk()->url('services/'.$service->service_image) }}" class="img-fluid img-thumbnail" style="width:auto;height:150px;">
                                            @endif
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-label">
                                            <label>Publish<span style="color:#F00">*</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" name="status" id="is_publish_1" class="form-check-input focus:shadow-outline @error('status') is-invalid @enderror" value="1" required  {{ ($service->status=="1")? "checked" : "" }}> 
                                            <label for="is_publish_1" class="form-check-label">Yes</label>
                                            <input type="radio" name="status" id="is_publish_0" class="form-check-input focus:shadow-outline @error('status') is-invalid @enderror" value="0" required {{ ($service->status=="0")? "checked" : "" }}> 
                                            <label for="is_publish_0" class="form-check-label">No</label>
                                            @error('status')
                                                <p class="help invalid-feedback">{{ $errors->first('status') }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>  
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-label">
                                            <label for="role">Service Title</label>
                                        </div>
                                              <div id="dynamicFields">
                                                @foreach($service_data as $servicedata)
                                            <div class="form-group row mb-3">
                                                <div class="col-md-4">
                                                <input type="hidden" name="form_data[{{ $servicedata->id }}][id]" value="{{ $servicedata->id }}">
                                                <input type="text" class="form-control" name="form_data[{{ $servicedata->id }}][data]" value="{{ $servicedata->data }}" placeholder="Data">
            
                                                </div>
                                                <div class="col-md-4">
                                                    <button type="button" class="btn btn-danger remove-btn">Remove</button>
                                                </div>  
                                            </div>
                                            @endforeach
                                        </div>
                                        <button type="button" id="addButton" class="btn btn-primary mb-3">Add More</button>
                                        <!-- <div class="input-block">
                                            <input type="file" name="service_image" id="service_image" accept="image/*" class="form-control @error('service_image') is-invalid @enderror">
                                            @error('service_image')
                                                <p class="help invalid-feedback">{{ $errors->first('service_image') }}</p>
                                            @enderror
                                        </div> -->
                                    </div>
                                </div>                               
                            </div><!-- row   -->                           
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary" name="submit">
                              <i class="ti-save-alt"></i> Save
                            </button>
                            <a href="{{route('services.index')}}"  class="btn btn-secondary">Cancel</a>
                        </div>                         
                    </div>
                </div>
              </div>
            </section>
        </form>
    </div>
  </div>
  <script>
    $(document).ready(function() {
    var maxFields = 20; // Maximum input fields allowed
    var addButton = $('#addButton'); // Add button selector
    var dynamicFields = $('#dynamicFields'); // Container for input fields

    var fieldCounter = 2; // Initial input field counter

    // Add button click handler
    $(addButton).click(function() {
        if(fieldCounter < maxFields) {
            var fieldHTML = `<div class="form-group row mb-3">
                                <div class="col-md-4">
                                <input type="hidden" name="form_data[${fieldCounter}][id]" value="">
                                  <input type="text" class="form-control" name="form_data[${fieldCounter}][data]" id="field_${fieldCounter}" placeholder="Field ${fieldCounter}">
                                </div>
                                <div class="col-md-4">
                                    <button type="button" class="btn btn-danger remove-btn">Remove</button>
                                </div>
                            </div>`; // HTML for new input fields with unique IDs and names

            fieldCounter++; // Increment field counter
            $(dynamicFields).append(fieldHTML); // Add new input field
        }
    });

    // Remove button click handler
    $(dynamicFields).on('click', '.remove-btn', function() {
        $(this).closest('.form-group').remove(); // Remove input field
        fieldCounter--; // Decrement field counter
    });
    // Form submit handler
    $('#dynamicForm').submit(function(event) {
        event.preventDefault(); // Prevent default form submission
        var formData = $(this).serialize(); // Serialize form data
        console.log(formData); // Output form data to console (for demo purposes)
        alert('Form submitted! Check the console for form data.');
    });
});


  </script>
@endsection
  
  