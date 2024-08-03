
@extends('admin.layouts.main')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h4 class="page-title">{{ __('messages.blog_managements') }}</h4>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                {{-- <li class="breadcrumb-item" aria-current="page">{{ __('messages.blog_managements') }}</li> --}}
                                <li class="breadcrumb-item active" aria-current="page">Edit Blog</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="container">
                    <div class="box-header">                        
                        <a href="{{route('blog.index')}}"  class="btn btn-secondary fa fa-arrow-left btn-sm float-right">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main content -->
        <form method="POST" action="{{ route('blog.update', $blog) }}" class="form" novalidate data-parsley-validate="" enctype="multipart/form-data">
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
                                            <input type="text" name="title" id="title" class="form-control focus:shadow-outline @error('title') is-invalid @enderror" value="{{ !empty($blog->title)?$blog->title:''}}" autocomplete="off" required/>
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
                                            <textarea name="description" id="description" rows="3" class="form-control focus:shadow-outline @error('description') is-invalid @enderror" value="{{ !empty($blog->description)?$blog->description:''}}" rows="10" autocomplete="off">{{ !empty($blog->description)?$blog->description:''}}</textarea>
                                            @error('description')
                                                <p class="help invalid-feedback">{{ $errors->first('description') }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>  
                            
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-label">
                                            <label for="quote">Quote<span style="color:#F00">*</span></label>
                                        </div>
                                        <div class="input-block">
                                            <input type="text" name="quote" id="quote" class="form-control focus:shadow-outline @error('quote') is-invalid @enderror" value="{{ !empty($blog->quote)?$blog->quote:''}}" autocomplete="off" required/>
                                            @error('quote')
                                                <p class="help invalid-feedback">{{ $errors->first('quote') }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-label">
                                            <label for="priority">Upload By<span style="color:#F00">*</span></label>
                                        </div>
                                        <div class="input-block">
                                            <input type="text" name="upload_by" id="upload_by" class="form-control focus:shadow-outline @error('upload_by') is-invalid @enderror" value="{{ !empty($blog->upload_by)?$blog->upload_by:''}}"  autocomplete="off" required/>
                                            @error('upload_by')
                                                <p class="help invalid-feedback">{{ $errors->first('priority') }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-label">
                                            <label for="title">Date<span style="color:#F00">*</span></label>
                                        </div>
                                        <div class="input-block">
                                            <input type="date" name="date" id="date" class="form-control focus:shadow-outline @error('date') is-invalid @enderror" value="{{ !empty($blog->date)?$blog->date:''}}" autocomplete="off" required/>
                                            @error('title')
                                                <p class="help invalid-feedback">{{ $errors->first('title') }}</p>
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
                                            <input type="file" name="file" id="file" accept="image/*" class="form-control @error('file') is-invalid @enderror">
                                            @error('file')
                                                <p class="help invalid-feedback">{{ $errors->first('file') }}</p>
                                            @enderror

                                            <img src="{{ Storage::disk()->url('blog/'.$blog->image) }}" class="img-fluid img-thumbnail" width="150">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-label">
                                            <label>Publish<span style="color:#F00">*</span></label>
                                        </div>
                                        <div class="form-check">
                                        <input type="radio" name="is_publish" id="is_publish_1" class="form-check-input focus:shadow-outline @error('is_publish') is-invalid @enderror" value="1" required {{ ($blog->is_publish=="1")? "checked" : "" }} > 
                                            <label for="is_publish_1" class="form-check-label">Yes</label>
                                            <input type="radio" name="is_publish" id="is_publish_0" class="form-check-input focus:shadow-outline @error('is_publish') is-invalid @enderror" value="0" required {{ ($blog->is_publish=="0")? "checked" : "" }} > 
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
                            <a href="{{route('blog.index')}}"  class="btn btn-secondary">Cancel</a>
                        </div>                         
                    </div>
                </div>
              </div>
            </section>
        </form>
    </div>
  </div>
@endsection
  
  