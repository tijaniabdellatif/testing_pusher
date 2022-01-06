@extends('layouts.credential')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center mb-5">
            <h2 class="heading-section">Register new Member</h2>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-10">
            <div class="wrap d-md-flex">
                <div class="img" style="background-image: url({{asset('images/bg.jpg')}});">
          </div>
                <div class="login-wrap p-4 p-md-5">
              <div class="d-flex">
                  <div class="w-100">
                      <h3 class="mb-4">Sign Up</h3>
                  </div>
                        <div class="w-100">
                            <p class="social-media d-flex justify-content-end">
                                <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                                <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                            </p>
                        </div>
              </div>
                    <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data" class="signin-form">
                        @csrf
                  <div class="form-group mb-3">
                      <label class="label" for="firstname">First Name</label>
                      <input type="text" class="form-control @error('firstname') {{'is-invalid'}} @enderror" name="firstname" placeholder="First name" value="{{old('firstname')}}">
                  </div>
                  @error('firstname')
                  <div class="alert alert-danger alert-dismissible fade show">
                    <strong>Error!</strong> {{$message}}
                 </div>
                 
                  @enderror
                  <div class="form-group mb-3">
                    <label class="label" for="lastname">Last name</label>
                    <input type="text" class="form-control @error('lastname') {{'is-invalid'}} @enderror" name="lastname" placeholder="Last name" value="{{old('lastname')}}">
                </div>
                @error('lastname')
                <div class="alert alert-danger alert-dismissible fade show">
                  <strong>Error!</strong> {{$message}}
              </div>
                @enderror
                <div class="form-group mb-3">
                    <label class="label" for="username">Username</label>
                    <input type="text" class="form-control @error('username') {{'is-invalid'}} @enderror" name="username" placeholder="Last name" value="{{old('username')}}">
                </div>
                @error('username')
                <div class="alert alert-danger alert-dismissible fade show">
                    <strong>Error!</strong> {{$message}}
              </div>
                @enderror
                <div class="form-group mb-3">
                    <label class="label" for="email">Email</label>
                    <input type="text" class="form-control @error('email') {{'is-invalid'}} @enderror" name="email" placeholder="Email" value="{{old('email')}}">
                </div>
                @error('email')
                <div class="alert alert-danger alert-dismissible fade show">
                  <strong>Error!</strong> {{$message}}
                  
              </div>
                @enderror
            <div class="form-group mb-3">
                <label class="label" for="password">Password</label>
                <input type="password" class="form-control @error('password') {{'is-invalid'}} @enderror" name="password" placeholder="Password">
            </div>
            @error('password')
            <div class="alert alert-danger alert-dismissible fade show">
              <strong>Error!</strong> {{$message}}
           
          </div>
            @enderror
            <div class="form-group mb-3">
                <label class="label" for="confirm">Re type password</label>
                <input type="password" class="form-control @error('confirm') {{'is-invalid'}} @enderror" name="confirm" placeholder="confirm password">
            </div>
            @error('confirm')
            <div class="alert alert-danger alert-dismissible fade show">
              <strong>Error!</strong> {{$message}}
             
          </div>
            @enderror
            <div class="form-group mb-3">

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
            @error('image')
            <div class="alert alert-danger alert-dismissible fade show">
              <strong>Error!</strong> {{$message}}
             
          </div>
            @enderror
            <div class="form-group">
                <input type="submit" name="submit" class="form-control btn btn-primary rounded submit px-3" value="Sign up" />
          
          </form>
          <p class="text-center">already member? <a href="{{route('login')}}">Sign in</a></p>
        </div>
      </div>
        </div>
    </div>
</div>
@endsection
