@extends('backend.layouts.backend-master')
@section('content')
    <div class="card">
        <div class="card-heading">
            <h2 class="text-center">Post</h2>
        </div>
    </div>
    <div class="row justify-content-end add-post-category">
        <a href="{{ route('admin.post.create') }}">
            <button class="btn btn-info btn-sm">Add Post</button>
        </a>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table">
                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Heading</th>
                            <th>Sub Heading</th>
                            <th>Category</th>
                            <th>Post Date</th>
                            <th>Post Time</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $key => $item)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $item->heading }}</td>
                                <td>{{ $item->sub_heading }}</td>
                                <td>{{ $item->postCategory->name }}</td>
                                <td>{{ $item->post_date }}</td>
                                <td>{{ $item->post_time }}</td>
                                <td>
                                    <a href="{{ route('admin.post.edit', $item->id) }}">
                                        <button class="btn btn-outline-info btn-sm"><i class="fa fa-edit"></i></button>
                                    </a>
                                    <a href="{{ route('admin.post.show', $item->id) }}">
                                        <button class="btn btn-outline-success btn-sm"><i class="fa fa-eye"></i></button>
                                    </a>
                                    <a href="{{ route('admin.post.delete', $item->id) }}">
                                        <button class="btn btn-outline-danger btn-sm"
                                            onclick="return confirm('Are you sure? Do you want to delete this item!!')"><i
                                                class="fa fa-trash"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
