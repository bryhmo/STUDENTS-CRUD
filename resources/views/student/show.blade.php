@extends('student.layout')
@section('content')


<div class="card">
  <div class="card-header"><h2>Students Page</h2></div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Name : {{ $students->name }}</h5>
        <p class="card-text">Address : {{ $students->address }}</p>
        <p class="card-text">Mobile : {{ $students->mobile }}</p>
        <p class="card-text">Course : {{ $students->course }}</p>
        <p class="card-text">Level : {{ $students->level }}</p>
        <p class="card-text">Age : {{ $students->age }}</p>
  </div>
      
    </hr>
  
  </div>
</div>