@extends('backend.layouts.backend-master')
@section('content')
    <div class="card">
        <div class="card-heading">
            <h2 class="text-center">Video</h2>
        </div>
    </div>
    <div class="row justify-content-end add-post-category">
        <a href="{{ route('admin.video.create') }}">
            <button class="btn btn-info btn-sm">Add Video</button>
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
                            <th>Post Date</th>
                            <th>Video URL</th>
                            <th> Video Banner</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($videos as $key=>$item)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $item->heading }}</td>
                                <td>{{ $item->post_date }}</td>
                                <td>{{ Str::of($item->url)->limit(20) }}</td>
                                <td>
                                    <img src="{{ asset( $item->banner ) }}" alt="" height="100px" width="100px">
                                </td>
                                <td>
                                    <a href="{{ route('admin.video.edit', $item->id) }}">
                                        <button class="btn btn-outline-info btn-sm"><i class="fa fa-edit"></i></button>
                                    </a>
                                    <a href="{{ route('admin.video.delete', $item->id) }}">
                                        <button class="btn btn-outline-danger btn-sm"
                                            onclick="return confirm('Are you sure? Do you want to delete this item!!')"><i
                                                class="fa fa-trash"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <span>no data in video table</span>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
