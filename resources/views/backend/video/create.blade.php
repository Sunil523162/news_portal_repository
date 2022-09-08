@extends('backend.layouts.backend-master')
@section('content')
    <div class="card">
        <div class="card-heading">
            <h2 class="text-center">Video</h2>
        </div>
    </div>
    <div class="card">
        <div class="message">
            @if (Session::get('error'))
                <span class="text-danger">{{ Session::get('error') }}</span>
            @endif
        </div>
        <div class="card-body">
            <div class="form-wrapper">
                <div class="post-form">
                    <form action="{{ route('admin.video.store') }}" method="POST" enctype="multipart/form-data"
                        class="responsive-form">
                        @csrf
                        <div class="row">
                            <div class="form-section col">
                                <label for="heading">Heading</label>
                                <input type="text" name="heading" id="heading" class="form-control"
                                    value="{{ old('heading') }}">
                                @error('heading')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-section col ">
                                <label for="post_date">Post Date</label>
                                <input type="date" name="post_date" class="form-control" value="{{ old('post_date') }}">
                                @error('post_date')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-section my-2 col-md-6">
                                <label for="url">Video URL</label>
                                <input type="url" name="url" class="form-control" value="{{ old('url') }}">
                                @error('url')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-section my-2 col-md-6">
                                <label for="banner">Video Banner</label>
                                <input type="file" name="banner" class="form-control">
                                @error('banner')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="submit-buttom float-right">
                            <button type="submit" class="btn btn-info">Add Video</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
