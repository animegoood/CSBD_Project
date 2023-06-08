@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'works')

@section('content')
<h1 class="text-center " style="color: #07a3bf; ">Web works Page</h1>


<div class="row">


  <div class="col-md-6">

    <a href="{{ route('works_section_create') }}" class="btn btn-primary  "> create works section</a>

  </div>

  <div class="col-md-6">

    <form action="{{ route('works_section_destroy') }}" method="POST">
      @csrf
      @method('DELETE')

      <button type="submit" class="btn btn-primary me-sm-3 me-1">Delete works section</button>

  </form>

  </div>
</div>





@endsection
