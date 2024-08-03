
@extends('admin.layouts.main')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h4 class="page-title">{{ __('messages.faq_management') }}</h4>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                {{-- <li class="breadcrumb-item" aria-current="page">{{ __('messages.faq_management') }}</li> --}}
                                <li class="breadcrumb-item active" aria-current="page">Edit Faq</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="container">
                    <div class="box-header">                        
                        <a href="{{route('faqs.index')}}"  class="btn btn-secondary fa fa-arrow-left btn-sm float-right">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main content -->
        <form method="POST" action="{{ route('faqs.update',$faq) }}" class="form" novalidate data-parsley-validate="" enctype="multipart/form-data">
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
                                            <label for="question">Question<span style="color:#F00">*</span></label>
                                        </div>
                                        <div class="input-block">
                                            <input type="text" name="question" id="question" class="form-control focus:shadow-outline @error('question') is-invalid @enderror" value="{{ !empty($faq->question)?$faq->question:''}}" autocomplete="off" required/>
                                            @error('question')
                                                <p class="help invalid-feedback">{{ $errors->first('question') }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-label">
                                            <label for="answer">Answer</label>
                                        </div>
                                        <div class="input-block">
                                            <textarea name="answer" id="answer" class="form-control focus:shadow-outline @error('answer') is-invalid @enderror" value="{{ old('answer') }}"  autocomplete="off">{{ !empty($faq->answer)?$faq->answer:''}}</textarea>
                                            @error('answer')
                                                <p class="help invalid-feedback">{{ $errors->first('answer') }}</p>
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
                                            <input type="radio" name="status" id="is_publish_1" class="form-check-input focus:shadow-outline @error('status') is-invalid @enderror" value="1" required  {{ ($faq->status=="1")? "checked" : "" }}> 
                                            <label for="is_publish_1" class="form-check-label">Yes</label>
                                            <input type="radio" name="status" id="is_publish_0" class="form-check-input focus:shadow-outline @error('status') is-invalid @enderror" value="0" required {{ ($faq->status=="0")? "checked" : "" }}> 
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
                            <a href="{{route('faqs.index')}}"  class="btn btn-secondary">Cancel</a>
                        </div>                         
                    </div>
                </div>
              </div>
            </section>
        </form>
    </div>
  </div>
@endsection
  
  