{{-- @if(count($errors) > 0) @foreach($errors->all() as $error)
<div class="row">
  <div class="col s12">
    <div class="alert_card card red">
      <div class="card-content white-text">
        {{$error}}
      </div>
    </div>
  </div>
</div>

@endforeach 
@endif  --}}
@if(session('success'))
<div class="row">
    <div class="col s12">
      <div id="absolute" class="alert_card card green">
        <div class="card-content white-text">
          {{session('success')}}
        </div>
      </div>
    </div>
  </div>

@endif @if(session('error'))
<div class="row">
    <div class="col s12">
      <div id="absolute" class="alert_card card red">
        <div class="card-content white-text">
          {{session('error')}}
        </div>
      </div>
    </div>
  </div>
@endif

@if(!empty($errorMsg))
<div class="row">
  <div class="col s12">
    <div id="absolute" class="alert_card card red">
      <div class="card-content white-text">
        {{$errorMsg}}
      </div>
    </div>
  </div>
</div>
@endif
@if(!empty($successMsg))
<div class="row">
  <div class="col s12">
    <div id="absolute" class="alert_card card green">
      <div class="card-content white-text">
        {{$successMsg}}
      </div>
    </div>
  </div>
</div>
@endif


</div>
