@extends('People.layout')
@section('content')
<div class="card">
  <div class="card-header"><h2>Edit ang People</h2></div>
  <div class="card-body">
      
      <form action="{{ url('people/' .$people->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$people->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$people->name}}" class="form-control"></br>

        <label>Age</label></br>
        <input type="text" name="age" id="age" value="{{$people->age}}" class="form-control"></br>

        <label>Gender</label></br>
        <input type="text" name="gender" id="gender" value="{{$people->gender}}" class="form-control"></br>

        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$people->mobile}}" class="form-control"></br>

        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$people->address}}" class="form-control"></br>

        <input type="submit" value="Update People" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop