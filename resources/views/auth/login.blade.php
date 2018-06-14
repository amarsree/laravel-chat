@extends('layouts.app')

@section('content')

<div data-role="page" >
       <div data-role="header">
           <h2>Login</h2>
           <a href="{{url('register')}}" class="ui-btn-right ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-right ui-icon-user">Registor</a>
       </div>
           <!--      <div class="card-header">Login</div> -->
  <div data-role="main"  class="ui-content main">
 <div class="login_container">
           <form method="POST"  action="{{ route('login') }}" data-ajax="false">
            @csrf
                 <div class="input_fields">
<!-- gmail -->
                        <label for="email" class="ui-hidden-accessible">E-Mail Addres</label>
                        <input id="email" placeholder="Email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                        
                         @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
        <!-- password -->           
                        <label for="password" class="ui-hidden-accessible">Password</label>
                        <input id="password" type="password" placeholder="Password"  class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif

                </div>
                <label>
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                </label>
                <button type="submit" class="btn btn-primary">
                    Login
                </button>
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    Forgot Your Password?
                </a>
            </form>

            
  </div>


            @endsection
