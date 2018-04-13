@extends('layouts.app') 

@section('content')
<div class="row">
  <div class="col l6 offset-l3 card">
  
    <form>
        <label>
          <input name="cardholder-name" class="field is-empty" placeholder="Jane Doe" />
          <span><span>Name</span></span>
        </label>
        <label>
          <div id="card-element" class="field is-empty"></div>
          <span><span>Card</span></span>
        </label>
        
        <button type="submit">Submit</button>
        <div class="outcome">
          <div class="error"></div>
          <div class="success">
            <span class="token"></span>
          </div>
        </div>
      </form>
  </div>

</div>
  @endsection