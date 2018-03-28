@extends('layouts.app') 
@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
				<h1>Create Review</h1>
				{!! Form::open(['action' => 'ReviewsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" name="title" class="form-control" placeholder="Title">
				</div>
				<div class="form-group">
					<label for="body">Body</label>
					<textarea id="article-ckeditor" class="form-control" name="body" cols="30" rows="10" placeholder="Body Text"></textarea>
				</div>
				
				{{--  RADIOS  --}}
				<h2>Quality Score</h2>
				<label class="radio-inline"><input type="radio" name="qualityScore" id="" value="1">1</label>
				<label class="radio-inline"><input type="radio" name="qualityScore" id="" value="2">2</label>
				<label class="radio-inline"><input type="radio" name="qualityScore" id="" value="3">3</label>
				<label class="radio-inline"><input type="radio" name="qualityScore" id="" value="4">4</label>
				<label class="radio-inline"><input type="radio" name="qualityScore" id="" value="5">5</label>
				<label class="radio-inline"><input type="radio" name="qualityScore" id="" value="6">6</label>
				<label class="radio-inline"><input type="radio" name="qualityScore" id="" value="7">7</label>
				<label class="radio-inline"><input type="radio" name="qualityScore" id="" value="8">8</label>
				<label class="radio-inline"><input type="radio" name="qualityScore" id="" value="9">9</label>
				<label class="radio-inline"><input type="radio" name="qualityScore" id="" value="10">10</label>
				
				<h2>Personality</h2>
				<label class="radio-inline"><input type="radio" name="personalityScore" id="" value="1">1</label>
				<label class="radio-inline"><input type="radio" name="personalityScore" id="" value="2">2</label>
				<label class="radio-inline"><input type="radio" name="personalityScore" id="" value="3">3</label>
				<label class="radio-inline"><input type="radio" name="personalityScore" id="" value="4">4</label>
				<label class="radio-inline"><input type="radio" name="personalityScore" id="" value="5">5</label>
				<label class="radio-inline"><input type="radio" name="personalityScore" id="" value="6">6</label>
				<label class="radio-inline"><input type="radio" name="personalityScore" id="" value="7">7</label>
				<label class="radio-inline"><input type="radio" name="personalityScore" id="" value="8">8</label>
				<label class="radio-inline"><input type="radio" name="personalityScore" id="" value="9">9</label>
				<label class="radio-inline"><input type="radio" name="personalityScore" id="" value="10">10</label>
				
				
				<h2>Professionalism</h2>
				<label class="radio-inline"><input type="radio" name="professionalismScore" id="" value="1">1</label>
				<label class="radio-inline"><input type="radio" name="professionalismScore" id="" value="2">2</label>
				<label class="radio-inline"><input type="radio" name="professionalismScore" id="" value="3">3</label>
				<label class="radio-inline"><input type="radio" name="professionalismScore" id="" value="4">4</label>
				<label class="radio-inline"><input type="radio" name="professionalismScore" id="" value="5">5</label>
				<label class="radio-inline"><input type="radio" name="professionalismScore" id="" value="6">6</label>
				<label class="radio-inline"><input type="radio" name="professionalismScore" id="" value="7">7</label>
				<label class="radio-inline"><input type="radio" name="professionalismScore" id="" value="8">8</label>
				<label class="radio-inline"><input type="radio" name="professionalismScore" id="" value="9">9</label>
				<label class="radio-inline"><input type="radio" name="professionalismScore" id="" value="10">10</label>
				
				{{--  SUBMIT  --}}
				<br><br>
				<button class="btn btn-primary" type="submit">Submit</button> 
				<br>
				{!! Form::close() !!}
		</div>
	</div>
	
</div>
@endsection
{{--  label.radio-inline*10>input:radio[name=qualityScore][value=$]{$}  --}}
