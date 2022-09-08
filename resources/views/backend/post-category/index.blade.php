@extends('backend.layouts.backend-master')
@section('content')
    <div class="card">
        <div class="card-heading">
            <h2 class="text-center">Post Category</h2>
        </div>
    </div>
    <div class="row justify-content-end add-post-category">
        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#createPostCategory">
            Add Post Category
        </button>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table">
                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($postCategories as $key => $item)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                        data-target="#editPostCategory{{ $item->id }}">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                    <a href="{{ route('admin.post.category.delete', $item->id) }}">
                                        <button class="btn btn-outline-danger btn-sm"
                                            onclick="return confirm('Are you sure? Do you want to delete this item!!')"><i
                                                class="fa fa-trash"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            @include('modals.post-category.edit')
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('modals.post-category.create')
@endsection
