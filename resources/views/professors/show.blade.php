@extends('layouts.app') 
@section('content')
<div class="section"></div>
<div class="container">
  <div class="card card-padded">

    <div class="row">
      <div class="col s12 ">
        <h4>
        {{$professor->first_name}}
        {{$professor->last_name}}
        </h4>
        <h5>
          {{$professor->department}}
        </h5>
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
          <a href="/reviews/create/{{$professor->id}}" class="btn blue darken-3">Review This Professor</a>
        </div>
      </div>
    </div> 
    <?php $hasReviews = false; ?>
    @foreach ($reviews as $review)
    @if($review->professor_id == $professor->id)
    <?php
    $hasReviews = true;
    ?>
    @endif
    @endforeach
    <?php if($hasReviews == true) {
      echo("<h4 class='center-align'>Reviews </h4>");
    };
    ?>
    <div class="divider"></div>
  </div>
    <div class="row card" id="rev-margin">
  
      @foreach ($reviews as $review)
      @if($review->professor_id == $professor->id)
        <a class="modal-trigger" href="#modal_review{{$review->id}}">
          <div class="col s12 l6">
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
      @endif
      @endforeach
            </div>
            
 
  </div>

@endsection
