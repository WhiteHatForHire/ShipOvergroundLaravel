@extends('layouts.app') 
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-lg-offset-3">
        <h1>REVIEWS</h1>
      </div>
    </div>
  </div>
  @foreach($reviews as $review)
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-lg-offset-3">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3>
            @for($i = 0; $i < $review->overallScore; $i++)
            <i class="fas fa-star"></i>
            @endfor
            </h3>
            <h3>{{$review->title}}</h3>
            <hr>
            <p>{{$review->body}}</p>
            <h4>Quality:</h4>
            <h4>
            @for($i = 0; $i < $review->qualityScore; $i++)
              <i class="fas fa-star"></i>
            @endfor
            </h4>
            <h4>Personality:</h4>
            <h4>
            @for($i = 0; $i < $review->personalityScore; $i++)
              <i class="fas fa-star"></i>
            @endfor
            </h4>
            <h4>Professionalism:</h4>
            <h4>
            @for($i = 0; $i < $review->professionalismScore; $i++)
              <i class="fas fa-star"></i>
            @endfor
            </h4>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  @endforeach
@endsection