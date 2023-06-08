@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'About')

@section('content')


    <div class="container">
        <div class="card">

            <h1 class="text-center " style="color: #07a3bf; ">Web About Page</h1>

            <div class="card-body">

                <div class="d-flex " style="     flex-diraction: row; justify-content: center; gap: 70px;flex-wrap: wrap;">

                    <div>

                        <a href="{{ route('about_section_create') }}" class="btn btn-primary text-center  "> Create about
                            section</a>

                    </div>

                    <div>

                        <a href="{{ route('about_section_edit') }}" class="btn btn-primary text-center "> Edit about
                            section</a>

                    </div>

                    <div>

                        <form action="{{ route('about_section_destroy') }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete</button>

                        </form>

                    </div>

                </div>

            </div>


        </div>
    </div>

@endsection
