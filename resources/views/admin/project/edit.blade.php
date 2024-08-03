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
                    <h4 class="page-title">{{ __('messages.project_managements') }}</h4>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                {{-- <li class="breadcrumb-item" aria-current="page">{{ __('messages.project_managements') }}</li> --}}
                                <li class="breadcrumb-item active" aria-current="page">Edit Page</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="container">
                    <div class="box-header">                        
                        <a href="{{route('project.index')}}"  class="btn btn-secondary fa fa-arrow-left btn-sm float-right">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main content -->
        <form method="POST" action="{{ route('project.update',$project) }}" class="form" novalidate data-parsley-validate="" enctype="multipart/form-data">
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
                                            <input type="text" name="title" id="title" class="form-control focus:shadow-outline @error('title') is-invalid @enderror" value="{{ !empty($project->title)?$project->title:''}}" autocomplete="off" required/>
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
                                            <textarea name="description" id="description" class="form-control focus:shadow-outline @error('description') is-invalid @enderror" value="{{ old('description') }}" autocomplete="off">{{ !empty($project->description)?$project->description:''}}</textarea>
                                            @error('description')
                                                <p class="help invalid-feedback">{{ $errors->first('description') }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>     
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-label">
                                            <label for="role">Category</label>
                                        </div>
                                        <div class="input-block">
                                            <select class="form-control appearance-none focus:shadow-outline" name="category_id" id="category_id" >
                                                <option disabled value="0">Select Category</option>
                                                @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" @if($category->id == $project->category_id) selected @endif>
                                                {{ $category->title }}
                                            </option>
                                        @endforeach
                                            </select>
                                            @error('category_id')
                                                <p class="help invalid-feedback">{{ $errors->first('category_id') }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-label">
                                            <label for="project_url">Project URL<span style="color:#F00">*</span></label>
                                        </div>
                                        <div class="input-block">
                                            <input type="text" name="project_url" id="project_url" class="form-control focus:shadow-outline @error('project_url') is-invalid @enderror" value="{{ !empty($project->project_url)?$project->project_url:''}}" autocomplete="off" required/>
                                            @error('project_url')
                                                <p class="help invalid-feedback">{{ $errors->first('project_url') }}</p>
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

                                            <img src="{{ Storage::disk()->url('projects/'.$project->image) }}" style="width:auto;height:150px;" class="img-fluid img-thumbnail" width="150">
                                        </div>
                                    </div>
                                </div>           
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-label">
                                            <label>Publish<span style="color:#F00">*</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" name="status" id="is_publish_1" class="form-check-input focus:shadow-outline @error('status') is-invalid @enderror" value="1" required  {{ ($project->status=="1")? "checked" : "" }}> 
                                            <label for="is_publish_1" class="form-check-label">Yes</label>
                                            <input type="radio" name="status" id="is_publish_0" class="form-check-input focus:shadow-outline @error('status') is-invalid @enderror" value="0" required {{ ($project->status=="0")? "checked" : "" }}> 
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
                            <a href="{{route('project.index')}}"  class="btn btn-secondary">Cancel</a>
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
  
  