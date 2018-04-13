@extends('layouts.app')    
    @section('content')
    <div class="section"></div>
    <div class="section"></div>
      <div class="container">
        <div class="row">
          <div class="col l12 s12 m12">
            <div class="card card-padded grey lighten-4">
              <span class="card-title">HELP / FAQ</span>
              <div class="section"></div>
                <ul class="collapsible grey darken-3 white-text">
                    <li>
                      <div class="collapsible-header black"><i class="material-icons">people</i>First</div>
                      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                    </li>
                    <li>
                      <div class="collapsible-header black"><i class="material-icons">place</i>Second</div>
                      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                    </li>
                    <li>
                      <div class="collapsible-header black"><i class="material-icons">whatshot</i>Third</div>
                      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                    </li>
                  </ul>
                  <a href="/donate"><div class="btn">Donate</div></a>
            </div>
          </div>
        </div>
      </div>
    @endsection