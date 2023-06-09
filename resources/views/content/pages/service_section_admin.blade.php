@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'services')

@section('content')


    <div class="container">
        <div class="card">

            <h1 class="text-center " style="color: #07a3bf; ">Web services Page</h1>


            <div class="card-body">

                <div class="d-flex " style="     flex-diraction: row; justify-content: center; gap: 70px;flex-wrap: wrap;">



                    <div >

                        <a href="{{ route('services_section_create') }}" class="btn btn-primary  "> create services
                            section</a>

                    </div>
                    <div >

                        <a href="{{ route('services_section_list') }}" class="btn btn-primary  ">services section list</a>

                    </div>
                    <div >
{{--
                        <form action="{{ route('services_section_destroy') }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete services section</button>

                        </form> --}}

                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection
