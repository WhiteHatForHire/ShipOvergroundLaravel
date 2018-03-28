@extends('layouts.app') 
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-lg-offset-3">
        <h1>CONTENT</h1>
      </div>
    </div>
  </div>
  @foreach($reviews as $review)
    
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-lg-offset-3">
        <div class="panel panel-primary">
            <!-- Default panel contents -->
            <div class="panel-heading">{{$review->title}}</div>
            <div class="panel-body">
              @for($i = 0; $i < $review->overallScore; $i++)
                <i class="fas fa-star"></i>
              @endfor
            </div>
            <!-- Table -->
            <table class="table">
              <tbody>
                <tr>
                  <td>{{$review->body}}</td>
                  <th>Overall Score:</th>
                  <th>{{$review->overallScore}}</th>
                </tr>
                <tr>
                  <th>Quality: </th>
                  <tr>
                    @for($i = 0; $i < $review->qualityScore; $i++)
                      <i class="fas fa-star"></i>
                    @endfor
                  </tr>
                </tr>
                  <tr>
                    <th scope="row">Scores:</th>
                    <th>Quality: {{$review->qualityScore}}</td>
                    <th>Personality: {{$review->personalityScore}}</td>
                    <th>Professionalism: {{$review->professionalismScore}}</th>
                  </tr>
              </tbody>
            </table>
          </div>
      </div>
    </div>
    
  </div>
  
  @endforeach
@endsection