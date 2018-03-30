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
      <div class="row" id="reviews_grid">
        @foreach($reviews as $review)
        {{--  materialize cards  --}}
        <!-- Modal Trigger -->
      <a class="modal-trigger" href="#modal_review{{$review->id}}">
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
                <h6>{{str_limit(($review->body), 30)}}</h6>
              </div>
            </div>
          </div>
        </a>
        <!-- Modal Structure -->
          <div id="modal_review{{$review->id}}" class="modal">
            <div class="modal-content">
              <h4>{{$review->title}}</h4>
              <p>{{$review->body}}</p>
              <h5>Quality: {{$review->qualityScore}}</h5>
              @for($i = 0; $i < $review->qualityScore; $i++)
              <i class="fas fa-star"></i>
              @endfor
              <h5>Personality: {{$review->personalityScore}}</h5>
                @for($i = 0; $i < $review->personalityScore; $i++)
                  <i class="fas fa-star"></i>
                @endfor
              <h5>Professionalism: {{$review->professionalismScore}}</h5>
                @for($i = 0; $i < $review->professionalismScore; $i++)
                  <i class="fas fa-star"></i>
                @endfor
              <h5>Overall: {{$review->overallScore}}</h5>
                @for($i = 0; $i < $review->overallScore; $i++)
                  <i class="fas fa-star"></i>
                @endfor
            </div>
            
            <div class="modal-footer">
              <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Click outside to close</a>
            </div>
          </div>
        @endforeach
      </div>
  {{--  </div>  --}}
@endsection