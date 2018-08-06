
@extends('layouts.app')


@section('content')
<div data-role="page">
	<div data-role="header" >
		<h1>Settings</h1>

		<a href="{{ url('chat')}}" class="ui-btn-right ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-right ui-icon-back">Back</a>
	</div>	
	
		<div class="ui-field-contain" id="theme-selector">
			<form>
				<ul data-role="listview" data-inset="true" data-type="horizontal">
					<li>
						<fieldset data-role="controlgroup" data-type="horizontal">
							<legend>Theme:</legend>
							<label for="a" id="a">A</label>
							<input type="radio" name="theme" id="a" checked>
							<label for="b">B</label>
							<input type="radio" name="theme" id="b">
							<label for="c">C</label>
							<input type="radio" name="theme" id="c">
							<label for="d">D</label>
							<input type="radio" name="theme" id="d">
							<label for="e">E</label>
							<input type="radio" name="theme" id="e">
							
						</fieldset>
					</li>
					<li class="ui-field-contain">
						<label for="name3">Text Input:</label>
						<input type="text" name="name3" id="name3" value="" data-clear-btn="true">
					</li>
					<li class="ui-field-contain">
						<label for="slider3">Slider:</label>
						<input type="range" name="slider3" id="slider3" value="0" min="0" max="100" data-highlight="true">
					</li>
					<li class="ui-field-contain" >
						<label for="flip3">Incgnoto mode:</label>
						<select name="flip3" id="flip3" data-role="slider">
							<option value="off">Off</option>
							<option value="on">On</option>
						</select>
					</li>

				</ul>
			</form>
		</div>
	
	<div data-role="footer">
		<h1><a href="{{ url('logout') }}">Logout</a></h1>
	</div>
</div>

@endsection