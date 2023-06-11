@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Home')

@section('content')


    <div class="container">
        <div class="card">
            <div class="card-datatable table-responsive pt-0">
                <table class="datatables-basic table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Services Name</th>
                            <th>Testimonial Name</th>
                            <th>Pricing Name</th>
                            <th>Services Image</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($service_lists as $service_list)
                            <tr>
                                <td>
                                    {{$service_list->id }}
                                </td>
                                <td>{{ $service_list->service_name }}</td>
                                <td>{{ $service_list->testimonials_name }}</td>
                                <td>{{ $service_list->pricing_name }}</td>

                                <td>
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2">
                                            <img src="{{ '/Testimonials_image/' . $service_list->testimonials_image }}"
                                                alt="{{ $service_list->testimonials_image }}" class="rounded-circle">
                                        </div>
                                    </div>

                                </td>

                                <td>

                                  <a class="btn btn-primary " href="{{ route('services_section_edit', $service_list->id) }}">Edit service section</a>

                                </td>

                                <td>

                                  <form action="{{ route('services_section_destroy', $service_list->id ) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">Delete service section</button>

                                </form>



                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
            <div class="card-body ">
              {{  $service_lists->links() }}</div>
    </div>
        </div>
    </div>


@endsection
