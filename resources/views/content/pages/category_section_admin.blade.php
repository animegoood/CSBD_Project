@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Category')

@section('content')


    <div class="container">
        <div class="card">

            <h1 class="text-center " style="color: #07a3bf; ">Blog Category</h1>

            <div class="card-body">

                <div class="d-flex " style="     flex-diraction: row; justify-content: center; gap: 70px;flex-wrap: wrap;">


                <div>

                    <a href="{{ route('admin_category_create') }}" class="btn btn-primary  ">create Categories</a>

                </div>

                <div>

                  <a href="{{ route('admin_category_list') }}" class="btn btn-primary  ">Categories list</a>

              </div>


            </div>
          </div>

        </div>
    </div>




@endsection
