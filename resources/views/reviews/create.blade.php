@extends('layouts.app') 
@section('content')
<div class="container">
	<div class="section"></div>
</div>
<div class="section"></div>
<div class="container">
	<div class="row">
		<div class="col l8 push-l2 m12 grey lighten-4 z-depth-1 ">
				<h3>Reviewing {{$professor->first_name}} {{$professor->last_name}}</h3>
				{!! Form::open(['action' => 'ReviewsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
				<div class="input-field col s12">
					<i class="material-icons prefix">create</i>
          <input id="title" type="text" name="title" maxlength="30" data-length="30">
					<label for="title">Title</label>
					@if ($errors->has('title'))
						<span class="red-text">
								<strong>{{ $errors->first('title') }}</strong>
						</span>
           @endif
					</div>
					<input id="professor_id" name="professor_id" class="hide" type="text" value="{{$professor->id}}">
					<div class="input-field col s12">
						<i class="material-icons prefix">chat</i>
						<textarea id="body" name="body" class="materialize-textarea"></textarea>
						<label for="body">Review Content</label>
						@if ($errors->has('body'))
							<span class="red-text">
									<strong>{{ $errors->first('body') }}</strong>
							</span>
						 @endif
						</div>
						<div class="section"></div>
						<div class="section"></div>
						
						{{--  RADIOS  --}}
						<div class="center-align">
							<h4>Quality</h2>
								<label><input type="radio" name="quality_score" value="1"><span>1</span></label>
								<label><input type="radio" name="quality_score" value="2"><span>2</span></label>
								<label><input type="radio" name="quality_score" value="3"><span>3</span></label>
								<label><input type="radio" name="quality_score" value="4"><span>4</span></label>
								<label><input type="radio" name="quality_score" value="5"><span>5</span></label>
								<label><input type="radio" name="quality_score" value="6"><span>6</span></label>
								<label><input type="radio" name="quality_score" value="7"><span>7</span></label>
								<label><input type="radio" name="quality_score" value="8"><span>8</span></label>
								<label><input type="radio" name="quality_score" value="9"><span>9</span></label>
								<label><input type="radio" name="quality_score" value="10"><span>10</span></label>
								<br>
								@if ($errors->has('quality_score'))
									<span class="red-text">
											<strong>{{ $errors->first('quality_score') }}</strong>
									</span>
								 @endif
								 
								 <h4>Personality</h2>
									<label><input type="radio" name="personality_score" value="1"><span>1</span></label>
									<label><input type="radio" name="personality_score" value="2"><span>2</span></label>
									<label><input type="radio" name="personality_score" value="3"><span>3</span></label>
									<label><input type="radio" name="personality_score" value="4"><span>4</span></label>
									<label><input type="radio" name="personality_score" value="5"><span>5</span></label>
									<label><input type="radio" name="personality_score" value="6"><span>6</span></label>
									<label><input type="radio" name="personality_score" value="7"><span>7</span></label>
									<label><input type="radio" name="personality_score" value="8"><span>8</span></label>
									<label><input type="radio" name="personality_score" value="9"><span>9</span></label>
									<label><input type="radio" name="personality_score" value="10"><span>10</span></label>
									<br>
									@if ($errors->has('quality_score'))
										<span class="red-text">
												<strong>{{ $errors->first('quality_score') }}</strong>
										</span>
									 @endif
									 
									 
									 <h4>Professionalism</h2>
										<label><input type="radio" name="professionalism_score" value="1"><span>1</span></label>
										<label><input type="radio" name="professionalism_score" value="2"><span>2</span></label>
										<label><input type="radio" name="professionalism_score" value="3"><span>3</span></label>
										<label><input type="radio" name="professionalism_score" value="4"><span>4</span></label>
										<label><input type="radio" name="professionalism_score" value="5"><span>5</span></label>
										<label><input type="radio" name="professionalism_score" value="6"><span>6</span></label>
										<label><input type="radio" name="professionalism_score" value="7"><span>7</span></label>
										<label><input type="radio" name="professionalism_score" value="8"><span>8</span></label>
										<label><input type="radio" name="professionalism_score" value="9"><span>9</span></label>
										<label><input type="radio" name="professionalism_score" value="10"><span>10</span></label>
										<br>
										@if ($errors->has('quality_score'))
											<span class="red-text">
													<strong>{{ $errors->first('quality_score') }}</strong>
											</span>
										 @endif
										 
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

{{--  label.radio-inline*10>input:radio[name=quality_score][value=$]{$}  --}}
