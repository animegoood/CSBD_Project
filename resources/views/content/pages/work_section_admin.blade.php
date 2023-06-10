@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'works')

@section('content')


    <div class="container">
        <div class="card">

            <h1 class="text-center " style="color: #07a3bf; ">Web works Page</h1>

            <div class="card-body">

                <div class="d-flex " style="     flex-diraction: row; justify-content: center; gap: 70px;flex-wrap: wrap;">


                <div>

                    <a href="{{ route('work_section_create') }}" class="btn btn-primary  "> create works section</a>

                </div>

                {{-- <div>

                    <form action="{{ route('work_section_destroy') }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete works section</button>

                    </form>

                </div> --}}
            </div>
          </div>

        </div>
    </div>




@endsection
