@extends('People.layout')
@section('content')
<div class="card">
  <div class="card-header">People Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Name : {{ $people->name }}</h5>
        <p class="card-text">Age : {{ $people->age }}</p>
        <p class="card-text">Gender : {{ $people->gender }}</p>
        <p class="card-text">Mobile : {{ $people->mobile }}</p>
        <p class="card-text">Address : {{ $people->address }}</p>
  </div>
      
    </hr>
  
  </div>
</div>