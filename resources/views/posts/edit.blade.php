@extends('layouts.temp')



@section('content')





      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Edit Modal</h5>
        </div>
    <div class="modal-content">
      <form action="/posts/{{$post->id}}" method="POST">
      {{@csrf_field()}}
  {{method_field('PUT')}}

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
        <button type="submit" class="btn btn-primary" value="UPDATE">Save changes</button>




    </form>

      <form action="/posts/{{$post->id}}" method="POST">
      {{@csrf_field()}}
  {{method_field('Delete')}}
        <button value="DELETE" type="submit" class="btn btn-danger">DELETE</button>
  </div>    </div>







@endsection

