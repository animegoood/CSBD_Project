@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'services')

@section('content')
<h1 class="text-center " style="color: #07a3bf; ">Web services Page</h1>


<div class="row">


  <div class="col-md-4">

    <a href="{{ route('services_section_create') }}" class="btn btn-primary  "> create services section</a>

  </div>
  <div class="col-md-4">

    <a href="{{ route('services_section_edit') }}" class="btn btn-primary  "> edit services section</a>

  </div>
  <div class="col-md-4">

    <form action="{{ route('services_section_destroy') }}" method="POST">
      @csrf
      @method('DELETE')

      <button type="submit" class="btn btn-primary me-sm-3 me-1">Delete services section</button>

  </form>

  </div>
</div>





@endsection
