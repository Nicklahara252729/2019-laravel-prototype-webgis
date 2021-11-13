@extends('theme')
@section('main')
<div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100 mx-auto">
          <div class="col-lg-4 mx-auto">
            <div class="auto-form-wrapper">
            <center><img src="{{asset('public/images/logo.png')}}" style="width:80px;margin-bottom:20px;margin-top:-30px;"></center>
            @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                <div class="form-group">
                  <label class="label">Email</label>
                  <div class="input-group">
                  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                
                <div class="form-group">
                <button type="submit" class="btn btn-primary submit-btn btn-block">
                {{ __('Send Password Reset Link') }}
                                </button>
                </div>
                <div class="form-group d-flex justify-content-between">
                  
                  
                                    <a class="text-small forgot-password text-black" href="{{ route('login') }}">
                                        {{ __('Login') }}
                                    </a>
                                
                  
                </div>

                
                <div class="text-block text-center my-3">
                  <span class="text-small font-weight-semibold">Not a member ?</span>
                  <a href="{{url('register')}}" class="text-black text-small">Create new account</a>
                </div>
              </form>
            </div>

            <p class="footer-text text-center">
            Copyright © 2018 <a href="#" target="_blank">WebGIS Plantation PTPN 4</a>. All rights reserved.
            </p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
@endsection
