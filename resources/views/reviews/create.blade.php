@extends('layouts.app') 
@section('content')
<div class="container">
	<div class="row">
		<div class="col l8 push-l2 m12 grey lighten-4 z-depth-1 ">
				<h1>Create Review</h1>
				{!! Form::open(['action' => 'ReviewsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
				<div class="input-field col s12">
					<i class="material-icons prefix">create</i>
          <input id="title" type="text" name="title" maxlength="30" data-length="30">
          <label for="title">Title</label>
				</div>
				<div class="input-field col s12">
						<i class="material-icons prefix">chat</i>
						<textarea id="body" name="body" class="materialize-textarea"></textarea>
						<label for="body">Review Content</label>
					</div>
				<div class="section"></div>
				<div class="section"></div>
				
				{{--  RADIOS  --}}
				<div class="center-align">
				<h4>Quality</h2>
				<label><input type="radio" name="qualityScore" value="1"><span>1</span></label>
				<label><input type="radio" name="qualityScore" value="2"><span>2</span></label>
				<label><input type="radio" name="qualityScore" value="3"><span>3</span></label>
				<label><input type="radio" name="qualityScore" value="4"><span>4</span></label>
				<label><input type="radio" name="qualityScore" value="5"><span>5</span></label>
				<label><input type="radio" name="qualityScore" value="6"><span>6</span></label>
				<label><input type="radio" name="qualityScore" value="7"><span>7</span></label>
				<label><input type="radio" name="qualityScore" value="8"><span>8</span></label>
				<label><input type="radio" name="qualityScore" value="9"><span>9</span></label>
				<label><input type="radio" name="qualityScore" value="10"><span>10</span></label>
				
				<h4>Personality</h2>
				<label><input type="radio" name="personalityScore" value="1"><span>1</span></label>
				<label><input type="radio" name="personalityScore" value="2"><span>2</span></label>
				<label><input type="radio" name="personalityScore" value="3"><span>3</span></label>
				<label><input type="radio" name="personalityScore" value="4"><span>4</span></label>
				<label><input type="radio" name="personalityScore" value="5"><span>5</span></label>
				<label><input type="radio" name="personalityScore" value="6"><span>6</span></label>
				<label><input type="radio" name="personalityScore" value="7"><span>7</span></label>
				<label><input type="radio" name="personalityScore" value="8"><span>8</span></label>
				<label><input type="radio" name="personalityScore" value="9"><span>9</span></label>
				<label><input type="radio" name="personalityScore" value="10"><span>10</span></label>
				
				
				<h4>Professionalism</h2>
				<label><input type="radio" name="professionalismScore" value="1"><span>1</span></label>
				<label><input type="radio" name="professionalismScore" value="2"><span>2</span></label>
				<label><input type="radio" name="professionalismScore" value="3"><span>3</span></label>
				<label><input type="radio" name="professionalismScore" value="4"><span>4</span></label>
				<label><input type="radio" name="professionalismScore" value="5"><span>5</span></label>
				<label><input type="radio" name="professionalismScore" value="6"><span>6</span></label>
				<label><input type="radio" name="professionalismScore" value="7"><span>7</span></label>
				<label><input type="radio" name="professionalismScore" value="8"><span>8</span></label>
				<label><input type="radio" name="professionalismScore" value="9"><span>9</span></label>
				<label><input type="radio" name="professionalismScore" value="10"><span>10</span></label>
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
