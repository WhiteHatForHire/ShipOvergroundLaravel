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
        <div class="col 12">
          <div class="card hoverable">
            <div class="card-content">
              <p>
                {{$professor->firstName}} {{$professor->lastName}} <br>
                {{$professor->professorEmail}} <br>
                {{$professor->department}}
                
              </p>                
            </div>
          </div>
        </div>
        @endforeach
      </div>
  {{--  </div>  --}}
@endsection