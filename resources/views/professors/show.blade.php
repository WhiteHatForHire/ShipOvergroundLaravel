@extends('layouts.app') 
@section('content')
<div class="section"></div>
<div class="container">
  <div class="row">
    <div class="col s12">
      <h4>
      {{$professor->first_name}}
      {{$professor->last_name}}
      </h4>
    </div>
  </div>
  
  <div class="row">
    <div class="col l9">
      <div class="section">
        <table>
          <thead>
            <tr>
              <th>Overall Score</th>
              <th>Professionalism Score</th>
              <th>Quality Score</th>
              <th>Personality Score</th>
            </tr>
          </thead>
            <tr>
              <td>{{$overallScore}}</td>
              <td>{{$professionalismScore}}</td>
              <td>{{$qualityScore}}</td>
              <td>{{$personalityScore}}</td>
            </tr>
        </table>
        <div class="section"></div>
      <a href="/reviews/create/{{$professor->id}}" class="btn btn-primary">Review This Professor</a>
        
        {{-- @foreach($reviews as $review)
          @if ($review->professor_id == $professor->id)
            Average Rating: {{$review->title}}
          @endif
        @endforeach --}}
      </div>
    </div>
  </div>
    {{-- <table>
      <thead>
        <tr>
          <th>{{Pro}}</th>
        </tr>
      </thead>
    </table> --}}
  </div>
</div>

<div class="section"></div>
<div class="section"></div>
<div class="section"></div>
<div class="section"></div>
<div class="section"></div>
<div class="section"></div>
<div class="section"></div>

@endsection