<div class="section" id="fade_out_section">
@if(count($errors) > 0) @foreach($errors->all() as $error)
<div class="row">
  <div class="col s12">
    <div class="alert_card card red">
      <div class="card-content white-text">
        {{$error}}
      </div>
    </div>
  </div>
</div>

@endforeach @endif @if(session('success'))
  <div class="alert alert-success">
    {{session('success')}}
  </div>
@endif @if(session('error'))
  <div class="alert alert-danger">
    {{session('error')}}
  </div>
@endif
</div>
