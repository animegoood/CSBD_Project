@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'About')

@section('content')


    <div class="container">
        <div class="card item-center">

            <h1 class="text-center " style="color: #07a3bf; ">Web About Page</h1>

            <div class="card-body">

                <table>

                    <thead>
                        <td>blog image</td>
                        <td>blog title</td>
                        <td>edit</td>
                        <td>delete</td>

                    </thead>
                    <tbody>


                    </tbody>






                </table>




                {{-- <div class="row">

        <div class="col-md-4">

            <a href="{{ route('about_section_create') }}" class="btn btn-primary text-center  "> Create about section</a>

        </div>

        <div class="col-md-4">

            <a href="{{ route('about_section_edit') }}" class="btn btn-primary text-center "> Edit about section</a>

        </div>

        <div class="col-md-4">

            <form action="{{ route('about_section_destroy') }}" method="POST">
                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-primary me-sm-3 me-1 text-center">Delete</button>

            </form>

        </div>

    </div> --}}

            </div>


        </div>
    </div>

@endsection
