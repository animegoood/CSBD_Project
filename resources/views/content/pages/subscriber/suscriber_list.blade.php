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
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($subscriber_lists as $subscriber_list)
                            <tr>
                                <td>
                                    {{$subscriber_list->id }}
                                </td>
                                <td>{{ $subscriber_list->service_name }}</td>
                                <td>{{ $subscriber_list->testimonials_name }}</td>
                                <td>{{ $subscriber_list->pricing_name }}</td>

                      
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
        </div>
    </div>


@endsection
