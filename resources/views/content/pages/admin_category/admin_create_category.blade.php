@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Category')

@section('content')

    <div class="card " style="height: 100%">
        <h3 class="text-center " style="color: #07a3bf; "> Category section </h3>
        <div class="card-body">
            <form action="{{ route('category_store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- // @if (session()->has('session'))

  // <span class="text-success">{{session()->get('session')}}</span>

  // @endif --}}
                {{-- @if ($errors->any())
                    @foreach ($errors->all() as $messages)
                        <span class="text-danger">{{ $messages }}</span>
                    @endforeach
                @endif --}}


                <div class="d-flex flex-column gap-3 align-items-center">


                    <div class="w-50">
                        <label class="form-label" for="category_name">Category Name</label>


                        <input class="form-control" name="category_name" type="text" id="category_name">


                    </div>


                    <div>
                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                        <button type="reset" class="btn btn-label-secondary">Cancel</button>
                    </div>

                </div>
            </form>














        </div>



    @endsection
