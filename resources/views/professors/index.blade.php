@extends('layouts.app') 
@section('content')
<div class="container">
  <div class="section"></div>
  <div class="row card blueOpaque">
      <h1 class="white-text center-align">Professors</h1>
        
        @foreach($professors as $professor)
        <a class="black-text" href="/professors/{{$professor->id}}">
          <div class="col l6 m12 s12">
            <div class="card hoverable">
              <div class="card-content center-align">
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
    </div>
@endsection