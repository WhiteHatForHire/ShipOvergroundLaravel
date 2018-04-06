@extends('layouts.app')

@section('content')
<div class="section"></div>
<div class="container">
  <div class="row">
    <div class="col s12 m8 l6">
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">textsms</i>
          <input type="text" id="autocomplete-input" class="autocomplete">
          <label for="autocomplete-input">Search for a Professor</label>
          {{-- {!! Form::open(['action' => 'ProfessorsController@search', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!} --}}
          <input type="text" id="professor_search_id" class="hide">
          <div class="section"></div>
				  <a href="" id="professor_search_button" class="btn">Go</a>
          {{-- {!! Form::close() !!} --}}
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section"></div>
<div class="section"></div>
<div class="section"></div>
<div class="section"></div>
<div class="section"></div>
<div class="section"></div>
<div class="section"></div>
<div class="section"></div>
<div class="section"></div>
<div class="section"></div>
<div class="section"></div>


<script type="text/javascript">
var profData = {!! $professors !!};


</script>

@endsection