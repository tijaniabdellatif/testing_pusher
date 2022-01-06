@extends('layouts.app')


@section('content')

<div class="container">
    @if(Session::has('message'))

<div class="alert alert-success alert-dismissible" role="alert">

   {{Session::get('message')}}
</div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-6 text-center mb-5">
            <h2 class="heading-section">Create category</h2>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Category</div>

                <div class="card-body">
                    <form method="POST"  action="{{ route('admin.categories.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="category_name" class="col-md-4 col-form-label text-md-right">{{ __('Category name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="category_name" value="{{ old('category_name') }}"  autofocus>
                            </div>
                        </div>

                        @error('category_name')
                        <div class="alert alert-danger alert-dismissible fade show">
                          <strong>Error!</strong> {{$message}}
                         
                      </div>
                        @enderror


                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description"></textarea>
                            </div>
                        </div>

                        @error('description')
                        <div class="alert alert-danger alert-dismissible fade show">
                          <strong>Error!</strong> {{$message}}
                         
                      </div>
                        @enderror

                        

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="inputGroupFileAddon01">Upload image</span>
                                    </div>
                                    <div class="custom-file">
                                      <input type="file" class="form-control custom-file-input @error('image') {{'is-invalid'}} @enderror" id="inputGroupFile01"
                                        aria-describedby="inputGroupFileAddon01" name="image">
                                      <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                  </div>
                            </div>
                        </div>

                        @error('image')
                        <div class="alert alert-danger alert-dismissible fade show">
                          <strong>Error!</strong> {{$message}}
                         
                      </div>
                        @enderror

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Create') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- 
<div style="display:none">
    @jquery
    @toastr_js
     @toastr_render  
    </div> --}}
            
@endsection