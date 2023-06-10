@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Blogs')

@section('content')


    <div class="container">
        <div class="card">
            <div class="card-datatable table-responsive pt-0">
                <table class="datatables-basic table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Blogs Name</th>
                            <th>Blogs Image</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($blogs_lists as $blogs_list)
                            <tr>
                                <td>
                                    {{$blogs_list->id }}
                                </td>
                                <td>{{ $blogs_list->Blog_titles }}</td>
                                <td>
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2">
                                            <img src="{{ '/Blog_thumbnail_image/' . $blogs_list->Blog_thumbnail }}"
                                                alt="BlogThumbnail" class="rounded-circle">
                                        </div>
                                    </div>

                                </td>

                                <td>

                                  <a class="btn btn-primary " href="{{ route('blog_section_edit', $blogs_list->id) }}">Edit blog </a>

                                </td>

                                <td>

                                  <form action="{{ route('blog_section_destroy', $blogs_list->id ) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">Delete blog </button>

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
