@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Category edit')

@section('content')

    <div class="card " style="height: 100%">
        <h3 class="text-center " style="color: hsl(189, 93%, 39%); ">Category Section</h3>
        <div class="card-body">
            <form action="{{ route('work_section_update', $work_section_details->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('patch')

                {{--      @if (session()->has('session'))
                    <span class="text-success">{{ session()->get('session') }}</span>
                @endif
 --}}
                {{-- @if ($errors->any())
                    @foreach ($errors->all() as $messages)
                        <span class="text-danger">{{ $messages }}</span>
                    @endforeach
                @endif --}}

                <div class="row mb-5">



                    <div class="col-md-6">

                        <label class="form-label" for="photography_name">photography_name</label>
                        <div class="mt-2">


                            <input type="text" id="photography_name"
                                value="{{ $work_section_details->photography_name }}" name="photography_name"
                                class="form-control">
                        </div>



                    </div>




                </div>







                <div style="float: right">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                    <button type="reset" class="btn btn-label-secondary">Cancel</button>
                </div>
        </div>
        </form>














    </div>



@endsection
