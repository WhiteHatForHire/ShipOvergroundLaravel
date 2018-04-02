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
          <input id="firstName" type="text" name="firstName" maxlength="30" data-length="30">
          <label for="firstName">First Name</label>
				</div>
				<div class="input-field col l6 s12">
					<i class="material-icons prefix">create</i>
          <input id="lastName" type="text" name="lastName" maxlength="30" data-length="30">
          <label for="lastName">Last Name</label>
        </div>
        
				<div class="input-field col l6 s12">
					<i class="material-icons prefix">create</i>
          <input id="professorEmail" type="text" name="professorEmail" maxlength="30" data-length="30">
          <label for="professorEmail">Professor Email</label>
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
@endsection
{{--  label.radio-inline*10>input:radio[name=qualityScore][value=$]{$}  --}}
