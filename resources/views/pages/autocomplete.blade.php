@extends('layouts.app')

@section('content')
<div class="section"></div>
<div class="section"></div>
<div class="section"></div>
<div class="container">
  <div class="row card card-padded ">
      <h3>Search our database of hundreds of Ship faculty</h3>
    <div class="col s12 m8 l6">
      <div class="row ">
        <div class="input-field col s12 ">
          <i class="material-icons prefix">search</i>
          <input type="text" id="autocomplete-input" class="autocomplete">
          <label for="autocomplete-input">Search for a Professor</label>
          {{-- {!! Form::open(['action' => 'ProfessorsController@search', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!} --}}
          <input type="text" id="professor_search_id" class="hide">
          <div class="section"></div>
				  <a href="" id="professor_search_button" class="btn">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Go&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
          {{-- {!! Form::close() !!} --}}
          <div class="autoInputAction" >
            <div class="section hide"></div>
            <h6 class="hide">Unable to find your professor?</h6>
            <br>
            <a href="/professors/create" class="hide waves-effect waves-light btn red darken-3"><i class="material-icons left">cloud</i>Add Professor</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
var profData = {!! $professors !!};


</script>

@endsection