
@extends('admin.layouts.main')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h4 class="page-title">{{ __('messages.banner_management') }}</h4>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                {{-- <li class="breadcrumb-item" aria-current="page">{{ __('messages.banner_management') }}</li> --}}
                                <li class="breadcrumb-item active" aria-current="page">Add Banner</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="container">
                    <div class="box-header">                        
                        <a href="{{route('banners.index')}}"  class="btn btn-secondary fa fa-arrow-left btn-sm float-right">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main content -->
        <form method="POST" action="{{ route('banners.store') }}" class="form" novalidate data-parsley-validate="" enctype="multipart/form-data">
            <section class="content">
              <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-body">                            
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-label">
                                            <label for="title">Title<span style="color:#F00">*</span></label>
                                        </div>
                                        <div class="input-block">
                                            <input type="text" name="title" id="title" class="form-control focus:shadow-outline @error('title') is-invalid @enderror" value="{{ !empty($banner->title)?$banner->title:''}}" autocomplete="off" required/>
                                            @error('title')
                                                <p class="help invalid-feedback">{{ $errors->first('title') }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-label">
                                            <label for="body">Body</label>
                                        </div>
                                        <div class="input-block">
                                            <textarea name="body" id="body" class="form-control focus:shadow-outline @error('body') is-invalid @enderror" value="{{ old('body') }}" autocomplete="off">{{ !empty($banner->body)?$banner->body:''}}</textarea>
                                            @error('body')
                                                <p class="help invalid-feedback">{{ $errors->first('body') }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-label">
                                            <label for="role">Image<span style="color:#F00">*</span></label>
                                        </div>
                                        <div class="input-block">
                                            <input type="file" name="file" id="file" accept="image/*" class="form-control @error('file') is-invalid @enderror" required>
                                            @error('file')
                                                <p class="help invalid-feedback">{{ $errors->first('file') }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-label">
                                            <label>Publish<span style="color:#F00">*</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" name="is_publish" id="is_publish_1" class="form-check-input focus:shadow-outline @error('is_publish') is-invalid @enderror" value="1" required> 
                                            <label for="is_publish_1" class="form-check-label">Yes</label>
                                            <input type="radio" name="is_publish" id="is_publish_0" class="form-check-input focus:shadow-outline @error('is_publish') is-invalid @enderror" value="0" required> 
                                            <label for="is_publish_0" class="form-check-label">No</label>
                                            @error('is_publish')
                                                <p class="help invalid-feedback">{{ $errors->first('is_publish') }}</p>
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
                            <a href="{{route('banners.index')}}"  class="btn btn-secondary">Cancel</a>
                        </div>                         
                    </div>
                </div>
              </div>
            </section>
        </form>
    </div>
  </div>
@endsection
  
  