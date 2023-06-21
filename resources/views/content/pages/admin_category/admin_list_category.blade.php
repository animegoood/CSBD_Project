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

                        @foreach ($work_lists as $work_list)
                            <tr>
                                <td>
                                    {{ $work_list->id }}
                                </td>
                                <td>{{ $work_list->photography_name }}</td>

                                <td>

                                    <a class="btn btn-primary " href="{{ route('work_section_edit', $work_list->id) }}">Edit
                                        work section</a>

                                </td>

                                <td>

                                    <form action="{{ route('work_section_destroy', $work_list->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">Delete work section</button>

                                    </form>



                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
            <div class="card-body ">
                {{ $work_lists->links() }}</div>
        </div>
    </div>
    </div>


@endsection
