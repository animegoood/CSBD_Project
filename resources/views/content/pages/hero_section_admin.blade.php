@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Home')

@section('content')
<h1 class="text-center " style="color: #07a3bf; ">Web Home Page</h1>


<div class="row">


  <div class="col-md-4">

    <a href="{{ route('herosection_create') }}" class="btn btn-primary  "> create hero section</a>

  </div>
  <div class="col-md-4">

    <a href="{{ route('herosection_edit') }}" class="btn btn-primary  "> edit hero section</a>

  </div>
  <div class="col-md-4">

    <form action="{{ route('herosection_destroy') }}" method="POST">
      @csrf
      @method('DELETE')

      <button type="submit" class="btn btn-primary me-sm-3 me-1">Delete</button>

  </form>

  </div>
</div>





@endsection
