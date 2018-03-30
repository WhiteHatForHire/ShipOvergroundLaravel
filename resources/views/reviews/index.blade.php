@extends('layouts.app') 
@section('content')
  <div class="container">
    <div class="row">
      <div class="col l6">
        <h1>REVIEWS</h1>
      </div>
    </div>
  </div>
  {{--  @foreach($reviews as $review)

  @endforeach    --}}
  {{--  <div class="container">  --}}
      <div class="row">
      @foreach($reviews as $review)
      {{--  materialize cards  --}}
      <div class="col">
          @if($review->overallScore >= 7)
            <div class="card green darken-2">
            <div class="card-content white-text">
          @elseif($review->overallScore >= 4 && $review->overallScore <= 6 )
            <div class="card lime accent-2">
            <div class="card-content black-text">
          @elseif($review->overallScore < 4)
            <div class="card red darken-2">
            <div class="card-content white-text">
          @endif 
            <h6>
              @for($i = 0; $i < $review->overallScore; $i++)
                <i class="fas fa-star"></i>
              @endfor
            </h6>
            <h5>{{str_limit(($review->title), 20)}}</h5>
            <div class="divider"></div>
            <h6>{{str_limit(($review->body), 20)}}</h6>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  {{--  </div>  --}}
@endsection