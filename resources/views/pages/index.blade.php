@extends('layouts.app')
@section('content')
    
        @if (Auth::check())
        
        <div class="container">
                <h1>Welcome, {{$name}}!</h1>
                <p>View the blog or your posts!</p>
                <p><a href="/posts" class="btn btn-primary btn-lg" role="button">Blog</a> <a href="/dashboard" role="button" class="btn btn-success btn-lg">My Posts</a></p>
        </div>
        @else
        <div class="section"></div>
        <div class="row">
            <div class="col l12">
              <div class="card blue">
                <div class="card-content white-text center">
                  <h2>Welcome To Ship Overground</h2>
                  <div class="section"></div>
                  <a href="/login" class="hoverable waves-effect waves-light btn green"><i class="material-icons left">face</i>Login</a>
                  <a href="/register" class="hoverable waves-effect waves-light btn purple"><i class="material-icons left">group_add</i>Register</a>
                  <div class="section"></div>
                </div>
              </div>
            </div>
          </div>
        @endif
@endsection