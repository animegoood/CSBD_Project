@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Blogs')

@section('content')


    <div class="container">
        <div class="card">

            <h1 class="text-center " style="color: #07a3bf; ">Web Blog Page</h1>

            <div class="card-body">

                <div class="d-flex " style="     flex-diraction: row; justify-content: center; gap: 70px;flex-wrap: wrap;">

                    <div>

                        <a href="{{ route('blog_section_create') }}" class="btn btn-primary  "> create Blog </a>

                    </div>
                    <div>

                        <a href="{{ route('blog_section_list') }}" class="btn btn-primary  "> Blogs list</a>

                    </div>

                </div>
            </div>

        </div>
    </div>


@endsection
