@extends('layouts.app') 
@section('content')
<div class="section"></div>
<div class="container">
	<div class="row">
		<div class="col l8 push-l2 m12 grey lighten-4 z-depth-1 ">
				<h1 class="center-align">Add Professor</h1>
				{!! Form::open(['action' => 'ProfessorsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
				<div class="input-field col l6 s12">
					<i class="material-icons prefix">create</i>
          <input id="first_name" type="text" name="first_name" maxlength="30" data-length="30">
					<label for="first_name">First Name</label>
				</div>
				<div class="input-field col l6 s12">
					<i class="material-icons prefix">create</i>
          <input id="last_name" type="text" name="last_name" maxlength="30" data-length="30">
          <label for="last_name">Last Name</label>
        </div>
        
				<div class="input-field col l6 s12">
					<i class="material-icons prefix">create</i>
          <input id="professor_email" type="text" name="professor_email" maxlength="30" data-length="30">
          <label for="professor_email">Professor Email</label>
				</div>
				<div class="input-field col l6 s12">
					<i class="material-icons prefix">create</i>
          <input id="department" type="text" name="department" maxlength="30" data-length="30">
          <label for="department">Department</label>
				</div>
				
				<div class="section"></div>
				<div class="section"></div>
				
				{{--  SUBMIT  --}}
				<div class="section"></div>
				<button class="btn btn-primary" type="submit">Submit</button> 
				<div class="section"></div>
				</div>
				{!! Form::close() !!}
		</div>
	</div>
	
</div>
<div class="section"></div>
<div class="section"></div>

@endsection
{{--  label.radio-inline*10>input:radio[name=qualityScore][value=$]{$}  --}}
