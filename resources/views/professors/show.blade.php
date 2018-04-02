@extends('layouts.app') 
@section('content')
<div class="section"></div>
<div class="container">
  <h4>
  {{$professor->first_name}}
  {{$professor->last_name}}
  </h4>
  <div class="section"></div>
  <a href="/reviews/create/{{$professor->id}}" class="btn btn-primary">Review This Professor</a>
</div>

@endsection