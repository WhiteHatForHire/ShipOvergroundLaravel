@extends('layouts.app') 
@section('content')
<div class="section"></div>
  <div class="row ">
    <div class="col l4 m6 offset-m3 s12 offset-l4">
      <div class="card center-align card-padded">
          <h1 class="center-align">REVIEWS</h1>
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
          <div class="col s12 m6 l3">
              @if($review->overall_score >= 7)
                <div class="card hoverable green darken-2">
                <div class="card-content white-text">
              @elseif($review->overall_score >= 4 && $review->overall_score <= 6 )
                <div class="card hoverable lime accent-2">
                <div class="card-content black-text">
              @elseif($review->overall_score < 4)
                <div class="card hoverable red darken-2">
                <div class="card-content white-text">
              @endif 
                <h6>
                  {{$review->professor->first_name}}
                  {{$review->professor->last_name}} <br>
                  {{$review->professor->department}} 
                  <div class="section"></div>
                  @for($i = 0; $i < $review->overall_score; $i++)
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
              <div class="">
                <h5>Quality: {{$review->quality_score}}</h5>
                @for($i = 0; $i < $review->quality_score; $i++)
                <i class="fas fa-star"></i>
                @endfor
                <h5>Personality: {{$review->personality_score}}</h5>
                  @for($i = 0; $i < $review->personality_score; $i++)
                    <i class="fas fa-star"></i>
                  @endfor
                <h5>Professionalism: {{$review->professionalism_score}}</h5>
                  @for($i = 0; $i < $review->professionalism_score; $i++)
                    <i class="fas fa-star"></i>
                  @endfor
                <h5>Overall: {{$review->overall_score}}</h5>
                  @for($i = 0; $i < $review->overall_score; $i++)
                    <i class="fas fa-star"></i>
                  @endfor
                </div>
            </div>
            
            <div class="modal-footer">
              <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Click outside to close</a>
            </div>
          </div>
        @endforeach
      </div>
  {{--  </div>  --}}
@endsection