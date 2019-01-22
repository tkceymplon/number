@extends('auth.template')

@section('content')

<div class="block-center mt-4 wd-xl">
         <!-- START card-->
         <div class="card card-flat">
            <div class="card-header text-center bg-dark">
               <a href="#">
                  <!-- <img class="block-center rounded" src="{{ asset('admin/img/logo.png') }}" alt="Image"> -->
                  Trinco campus
               </a>
            </div>
            <div class="card-body">
               <p class="text-center py-2">SIGN IN TO CONTINUE.</p>
                <form method="POST" class="mb-3" action="{{ route('login') }}">
                    @csrf
                  <div class="form-group">
                     <div class="input-group with-focus">
                       <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        <div class="input-group-append">
                           <span class="input-group-text text-muted bg-transparent border-left-0">
                              <em class="fa fa-envelope"></em>
                           </span>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="input-group with-focus">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        <div class="input-group-append">
                           <span class="input-group-text text-muted bg-transparent border-left-0">
                              <em class="fa fa-lock"></em>
                           </span>
                        </div>
                     </div>
                  </div>
                  <div class="clearfix">
                     <div class="checkbox c-checkbox float-left mt-0">
                        <label>
                           <input type="checkbox" value="" name="remember">
                           <span class="fa fa-check"></span> Remember Me</label>
                     </div>
                    
                  </div>
                  <button class="btn btn-block btn-primary mt-3" type="submit">Login</button>
               </form>
            </div>
         </div>
         <!-- END card-->
         <div class="p-3 text-center">
            <span class="mr-2">&copy;</span>
            <span>2018</span>
            <span class="mr-2">-</span>
            <span>Angle</span>
            <br>
            <span>Myadmin Template</span>
         </div>
      </div>


@endsection
