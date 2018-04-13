@extends('layouts.app')    
    @section('content')
      @if (Auth::check())
        <div class="section"></div>
        <div class="section"></div>
        <div class="section"></div>
        <div class="section"></div>
        <div class="section"></div>
      <div class="container">
        <div class="card">
          <div class="card-content center-align">
            <h1 class="center-align">Welcome, {{$user->name}}!</h1>
            <a href="/myReviews" class="waves-effect waves-light btn blue darken-3"><i class="material-icons left">mode_comment</i>My Reviews</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a class="waves-effect waves-light btn light-green accent-4"><i class="material-icons left">help</i>Help / FAQ</a>
            <h6></h6>
          </div>
        </div>
      </div>
      
      {{-- IF NOT LOGGED IN --}}
      @else
          <div class="section"></div>
          <div class="section"></div>
          <div class="section"></div>
          <div class="section"></div>
          <div class="row">
            <div class="col l8 m10 offset-m1 s12 offset-l2">
              <div class="card" id="redOpaque">
                <div class="card-content white-text center" >
                  <h3>Welcome to Ship Overground!</h3>
                  <h5>A place to review professors at Shippensburg University</h5>
                  <div class="section"></div>
                  <a href="/login" class="hoverable waves-effect waves-light btn blue darken-4"><i class="material-icons left">face</i>Login&nbsp;&nbsp;&nbsp;&nbsp;</a> &nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="/register" class="hoverable waves-effect waves-light btn black"><i class="material-icons left">group_add</i>Register</a>
                  <div class="section"></div>
                </div>
              </div>
            </div>
          </div>
        @endif
@endsection