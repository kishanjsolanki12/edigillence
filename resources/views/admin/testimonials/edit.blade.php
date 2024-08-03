
@extends('admin.layouts.main')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h4 class="page-title">{{ __('messages.testimonial_management') }}</h4>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                {{-- <li class="breadcrumb-item" aria-current="page">{{ __('messages.testimonial_management') }}</li> --}}
                                <li class="breadcrumb-item active" aria-current="page">Edit Testimonial</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="container">
                    <div class="box-header">                        
                        <a href="{{route('testimonials.index')}}"  class="btn btn-secondary fa fa-arrow-left btn-sm float-right">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main content -->
        <form method="POST" action="{{ route('testimonials.update',$testimonial) }}" class="form" novalidate data-parsley-validate="" enctype="multipart/form-data">
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
                                            <label for="client_name">Name<span style="color:#F00">*</span></label>
                                        </div>
                                        <div class="input-block">
                                            <input type="text" name="client_name" id="client_name" class="form-control focus:shadow-outline @error('client_name') is-invalid @enderror" value="{{ !empty($testimonial->client_name)?$testimonial->client_name:''}}" autocomplete="off" required/>
                                            @error('client_name')
                                                <p class="help invalid-feedback">{{ $errors->first('client_name') }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-label">
                                            <label for="comment">Comment</label>
                                        </div>
                                        <div class="input-block">
                                            <textarea name="comment" id="comment" class="form-control focus:shadow-outline @error('comment') is-invalid @enderror" value="{{ old('comment') }}"  autocomplete="off">{{ !empty($testimonial->comment)?$testimonial->comment:''}}</textarea>
                                            @error('comment')
                                                <p class="help invalid-feedback">{{ $errors->first('comment') }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>   
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-label">
                                            <label for="client_company">Company<span style="color:#F00">*</span></label>
                                        </div>
                                        <div class="input-block">
                                            <input type="text" name="client_company" id="client_company" class="form-control focus:shadow-outline @error('client_company') is-invalid @enderror" value="{{ !empty($testimonial->client_company)?$testimonial->client_company:''}}" autocomplete="off" required/>
                                            @error('client_company')
                                                <p class="help invalid-feedback">{{ $errors->first('client_company') }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-label">
                                            <label for="stars">Stars<span style="color:#F00">*</span></label>
                                        </div>
                                        <div class="input-block">
                                            <input type="text" name="stars" id="stars" class="form-control focus:shadow-outline @error('stars') is-invalid @enderror" value="{{ !empty($testimonial->stars)?$testimonial->stars:''}}" autocomplete="off" required/>
                                            @error('stars')
                                                <p class="help invalid-feedback">{{ $errors->first('stars') }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-label">
                                            <label for="role">Photo</label>
                                        </div>
                                        <div class="input-block">
                                            <input type="file" name="file" id="file" accept="image/*" class="form-control @error('file') is-invalid @enderror">
                                            @error('file')
                                                <p class="help invalid-feedback">{{ $errors->first('file') }}</p>
                                            @enderror

                                            <img src="{{ Storage::disk()->url('testimonials/'.$testimonial->client_photo) }}" class="img-fluid img-thumbnail" style="width:auto;height:150px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-label">
                                            <label>Publish<span style="color:#F00">*</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" name="status" id="is_publish_1" class="form-check-input focus:shadow-outline @error('status') is-invalid @enderror" value="1" required  {{ ($testimonial->status=="1")? "checked" : "" }}> 
                                            <label for="is_publish_1" class="form-check-label">Yes</label>
                                            <input type="radio" name="status" id="is_publish_0" class="form-check-input focus:shadow-outline @error('status') is-invalid @enderror" value="0" required {{ ($testimonial->status=="0")? "checked" : "" }}> 
                                            <label for="is_publish_0" class="form-check-label">No</label>
                                            @error('status')
                                                <p class="help invalid-feedback">{{ $errors->first('status') }}</p>
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
                            <a href="{{route('testimonials.index')}}"  class="btn btn-secondary">Cancel</a>
                        </div>                         
                    </div>
                </div>
              </div>
            </section>
        </form>
    </div>
  </div>
@endsection
  
  