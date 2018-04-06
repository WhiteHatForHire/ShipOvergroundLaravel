@extends('layouts.app') 
@section('content')
  <div class="container">
    <div class="row">
      <div class="col l6">
        <h1>Professors</h1>
      </div>
    </div>
  </div>
  
  {{--  @foreach($reviews as $review)


  @endforeach    --}}
  {{--  <div class="container">  --}}
      <div class="row">
        @foreach($professors as $professor)
        <a class="black-text" href="/professors/{{$professor->id}}">
          <div class="col 12">
            <div class="card hoverable">
              <div class="card-content">
                <p>
                  {{$professor->first_name}} {{$professor->last_name}} <br>
                  {{$professor->professor_email}} <br>
                  {{$professor->department}} <br>
                </p>                
              </div>
            </div>
          </div>
        </a>
        @endforeach
      </div>
  {{--  </div>  --}}
@endsection