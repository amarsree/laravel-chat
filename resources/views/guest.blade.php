@extends('layouts.app')


@section('content')

<div data-role="page">
		<div data-role="header">
			<h2>Login as guest</h2>
			<a href="{{url('/') }}" class="ui-btn-right ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-right ui-icon-back">Back</a>
		</div>
		
		<div data-role="main" class="ui-content">
			<form  method="post" action="{{ route('guest.store') }}">
				{{ @csrf_field() }}
				<label for="textinput-s">Login as</label>
				<input id="textinput-s" placeholder="Name" name="nickname" data-clear-btn="true" type="text" class="form-control" >

				<label for="select-native-s">Gender</label>
				<select  id="select-native-s"  class="form-control" name="gender" required>
					<option value="male">male</option>
					<option value="female">female</option>
					<!-- <option value="large">Three</option> -->
				</select>
				<label for="slider-s">Input slider:</label>
				<input id="slider-s" value="25" min="18" max="100" data-highlight="true" type="range" class="form-control" name="age">
				<!-- 	<submit class="ui-btn ui-btn-inline login_btn">Log in</submit> -->
				 <button type="submit" class="ui-btn ui-btn-inline login_btn">
                    Login
                </button>
			</form>
		</div>
</div>


@endsection