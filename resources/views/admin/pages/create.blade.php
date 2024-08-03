@extends('admin.layouts.main')
@section('content')
{{-- CKEditor CDN --}}
<script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h4 class="page-title">{{ __('messages.page_management') }}</h4>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                {{-- <li class="breadcrumb-item" aria-current="page">{{ __('messages.page_management') }}</li> --}}
                                <li class="breadcrumb-item active" aria-current="page">Add Page</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="container">
                    <div class="box-header">                        
                        <a href="{{route('pages.index')}}"  class="btn btn-secondary fa fa-arrow-left btn-sm float-right">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main content -->
        <form method="POST" action="{{ route('pages.store') }}" class="form" novalidate data-parsley-validate="" enctype="multipart/form-data">
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
                                            <input type="text" name="title" id="title" class="form-control focus:shadow-outline @error('title') is-invalid @enderror" value="{{ !empty($page->title)?$page->title:''}}" autocomplete="off" required/>
                                            @error('title')
                                                <p class="help invalid-feedback">{{ $errors->first('title') }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                           
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-label">
                                            <label for="description">Description</label>
                                        </div>
                                        <div class="input-block">
                                            <textarea name="description" id="description" class="form-control focus:shadow-outline @error('description') is-invalid @enderror" value="{{ old('description') }}" rows="10" autocomplete="off">{{ !empty($page->description)?$page->description:''}}</textarea>
                                            @error('description')
                                                <p class="help invalid-feedback">{{ $errors->first('description') }}</p>
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
                                            <input type="radio" name="status" id="is_publish_1" class="form-check-input focus:shadow-outline @error('status') is-invalid @enderror" value="1" required> 
                                            <label for="is_publish_1" class="form-check-label">Yes</label>
                                            <input type="radio" name="status" id="is_publish_0" class="form-check-input focus:shadow-outline @error('status') is-invalid @enderror" value="0" required> 
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
                            <a href="{{route('pages.index')}}"  class="btn btn-secondary">Cancel</a>
                        </div>                         
                    </div>
                </div>
              </div>
            </section>
        </form>
    </div>
  </div>
<script>
    ClassicEditor.create( document.querySelector( '#description' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
  @endsection
  
  