@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'services')

@section('content')


    <div class="container">
        <div class="card">

            <h1 class="text-center " style="color: #07a3bf; ">Admin Profile Page</h1>


            <div class="card-body">

                <div class="d-flex " style="     flex-diraction: row; justify-content: center; gap: 70px;flex-wrap: wrap;">



                    <div>

                        <a href="{{ route('services_section_create') }}" class="btn btn-primary  "> Create Admin Profile</a>

                    </div>
                    <div>

                        <a href="{{ route('services_section_edit') }}" class="btn btn-primary  "> Edit Admin Profile</a>

                    </div>
                    <div>

                        <form action="{{ route('services_section_destroy') }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete Admin Profile</button>

                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection
