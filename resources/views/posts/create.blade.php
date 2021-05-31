@extends('layouts.temp')



@section('content')



      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Create Modal</h5>
        </div>
    <div class="modal-content">
      <form action="{{action('App\Http\Controllers\AddressController@store')}}" method="POST">
      {{@csrf_field()}}

        <div class="modal-body">

       <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"> City</label>
  <input type="text" name="city" class="form-control" id="city" placeholder="city">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput2" class="form-label"> Street</label>
  <input type="text" name="street" class="form-control" id="street" placeholder="street">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput3" class="form-label">Alley</label>
  <input type="text" name="alley" class="form-control" id="alley" placeholder="alley">
 <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>

   </div>

    </form>
    </div>
  </div>


@endsection

