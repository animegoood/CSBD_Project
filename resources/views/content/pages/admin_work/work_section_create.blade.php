@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Works admin')

@section('content')

    <div class="card " style="height: 100%">
        <h3 class="text-center " style="color: hsl(189, 93%, 39%); ">Work Section </h3>
        <div class="card-body">
            <form action="{{ route('work_section_store') }}" method="POST" enctype="multipart/form-data">
                @csrf

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


                            <input type="text" id="photography_name" name="photography_name" class="form-control">
                        </div>



                    </div>



                    <div class="col-md-6">

                      <label class="form-label" for="illustrator_name">illustrator_name</label>
                      <div class="mt-2">


                          <input type="text" id="illustrator_name" name="illustrator_name" class="form-control">
                      </div>



                  </div>



                  <div class="col-md-6">

                    <label class="form-label" for="graphicDesign_name">graphicDesign_name</label>
                    <div class="mt-2">


                        <input type="text" id="graphicDesign_name" name="graphicDesign_name" class="form-control">
                    </div>



                </div>




                    <div class="col-md-6">
                        <label class="form-label" for="photography">
                            Photography Image
                        </label>
                        <div class=" mt-2">
                            <input class="form-control" type="file" id="photography" accept=".png,.jpg"
                                name="photography">

                        </div>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="illustrator">
                            Illustrator Image
                        </label>
                        <div class=" mt-2">
                            <input class="form-control" type="file" id="illustrator" accept=".png,.jpg"
                                name="illustrator">

                        </div>
                    </div>




                    <div class="col-md-6">
                        <label class="form-label" for="graphicDesign">
                            Graphic Design Image
                        </label>
                        <div class=" mt-2">
                            <input class="form-control" type="file" id="graphicDesign" accept=".png,.jpg"
                                name="graphicDesign">

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
