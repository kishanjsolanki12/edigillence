
@extends('admin.layouts.main')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h4 class="page-title">{{ __('messages.team_management') }}</h4>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                {{-- <li class="breadcrumb-item" aria-current="page">{{ __('messages.team_management') }}</li> --}}
                                <li class="breadcrumb-item active" aria-current="page">Edit Team</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="container">
                    <div class="box-header">                        
                        <a href="{{route('teams.index')}}"  class="btn btn-secondary fa fa-arrow-left btn-sm float-right">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main content -->
        <form method="POST" action="{{ route('teams.update', $team) }}" class="form" novalidate data-parsley-validate="" enctype="multipart/form-data">
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
                                            <label for="name">Name<span style="color:#F00">*</span></label>
                                        </div>
                                        <div class="input-block">
                                            <input type="text" name="name" id="name" class="form-control focus:shadow-outline @error('name') is-invalid @enderror" value="{{ !empty($team->name)?$team->name:''}}" autocomplete="off" required/>
                                            @error('name')
                                                <p class="help invalid-feedback">{{ $errors->first('name') }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-label">
                                            <label for="designation">Designation</label>
                                        </div>
                                        <div class="input-block">
                                            <input type="text" name="designation" id="designation" class="form-control focus:shadow-outline @error('designation') is-invalid @enderror" value="{{ !empty($team->designation)?$team->designation:''}}" autocomplete="off" required/>
                                            @error('designation')
                                                <p class="help invalid-feedback">{{ $errors->first('designation') }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-label">
                                            <label for="facebook_id">Facebook URL<span style="color:#F00">*</span></label>
                                        </div>
                                        <div class="input-block">
                                            <input type="text" name="facebook_id" id="facebook_id" class="form-control focus:shadow-outline @error('facebook_id') is-invalid @enderror" value="{{ !empty($team->facebook_id)?$team->facebook_id:''}}" autocomplete="off" required/>
                                            @error('facebook_id')
                                                <p class="help invalid-feedback">{{ $errors->first('facebook_id') }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-label">
                                            <label for="insta_id">Instagram URL<span style="color:#F00">*</span></label>
                                        </div>
                                        <div class="input-block">
                                            <input type="text" name="insta_id" id="insta_id" class="form-control focus:shadow-outline @error('insta_id') is-invalid @enderror" value="{{ !empty($team->insta_id)?$team->insta_id:''}}" autocomplete="off" required/>
                                            @error('insta_id')
                                                <p class="help invalid-feedback">{{ $errors->first('insta_id') }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-label">
                                            <label for="twitter_id">Twitter URL<span style="color:#F00">*</span></label>
                                        </div>
                                        <div class="input-block">
                                            <input type="text" name="twitter_id" id="twitter_id" class="form-control focus:shadow-outline @error('twitter_id') is-invalid @enderror" value="{{ !empty($team->twitter_id)?$team->twitter_id:''}}" autocomplete="off" required/>
                                            @error('twitter_id')
                                                <p class="help invalid-feedback">{{ $errors->first('twitter_id') }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-label">
                                            <label for="linkedin_id">Linkedin URL<span style="color:#F00">*</span></label>
                                        </div>
                                        <div class="input-block">
                                            <input type="text" name="linkedin_id" id="linkedin_id" class="form-control focus:shadow-outline @error('linkedin_id') is-invalid @enderror" value="{{ !empty($team->linkedin_id)?$team->linkedin_id:''}}" autocomplete="off" required/>
                                            @error('linkedin_id')
                                                <p class="help invalid-feedback">{{ $errors->first('linkedin_id') }}</p>
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
                                            @if($team->photo!='')
                                                <img src="{{ Storage::disk()->url('teams/'.$team->photo) }}" class="img-fluid img-thumbnail" style="width:auto;height:150px;">
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
                                            <input type="radio" name="status" id="is_publish_1" class="form-check-input focus:shadow-outline @error('status') is-invalid @enderror" value="1" required  {{ ($team->status=="1")? "checked" : "" }}> 
                                            <label for="is_publish_1" class="form-check-label">Yes</label>
                                            <input type="radio" name="status" id="is_publish_0" class="form-check-input focus:shadow-outline @error('status') is-invalid @enderror" value="0" required {{ ($team->status=="0")? "checked" : "" }}> 
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
                            <a href="{{route('teams.index')}}"  class="btn btn-secondary">Cancel</a>
                        </div>                         
                    </div>
                </div>
              </div>
            </section>
        </form>
    </div>
  </div>
@endsection
  
  