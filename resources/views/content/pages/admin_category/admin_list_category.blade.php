@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Category list')

@section('content')


    <div class="container">
        <div class="card">
            <div class="card-datatable table-responsive pt-0">
                <table class="datatables-basic table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category Name</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($category_details as $category_detail)
                            <tr>
                                <td>
                                    {{ $category_detail->id }}
                                </td>
                                <td>{{ $category_detail->category_name }}</td>

                                <td>

                                    <a class="btn btn-primary " href="{{ route('admin_category_edit', $category_detail->id) }}">Edit category section</a>

                                </td>

                                <td>

                                    <form action="{{ route('admin_category_destroy', $category_detail->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">Delete category section</button>

                                    </form>



                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
            <div class="card-body ">
                {{ $category_details->links() }}</div>
        </div>
    </div>
    </div>


@endsection
