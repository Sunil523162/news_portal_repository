@extends('backend.layouts.backend-master')
@section('content')
    <div class="card">
        <div class="card-heading">
            <h2 class="text-center">Post</h2>
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
                    <form action="{{ route('admin.post.update', $post->id) }}" method="POST" enctype="multipart/form-data"
                        class="responsive-form">
                        @csrf
                        <div class="row">
                            <div class="form-section col">
                                <label for="heading">Heading</label>
                                <input type="text" name="heading" id="heading" class="form-control"
                                    value="{{ $post->heading }}">
                                @error('heading')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-section col ">
                                <label for="sub_heading">Sub Heading</label>
                                <input type="text" name="sub_heading" class="form-control"
                                    value="{{ $post->sub_heading }}">
                                @error('heading')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-section col ">
                                <label for="post_category">Post Category</label>
                                <select name="post_category_id" id="" class="form-control">
                                    <option value="">Select Post Category</option>
                                    @foreach ($postCategories as $key => $category)
                                        <option {{ $post->post_category_id == $category->id ? 'selected' : '' }}
                                            value="{{ $category->id }}">
                                            {{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('heading')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-section col ">
                                <label for="auther">Auther</label>
                                <input type="text" name="auther" class="form-control" value="{{ $post->auther }}">
                                @error('auther')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-section col">
                                <label for="feature_image">Feature Image</label>
                                <input type="file" name="feature_image" id=""class="form-control"
                                    value="{{ $post->feature_image }}">
                                @error('feature_image')
                                    <span class="taxt-danger">{{ $message }}</span>
                                @enderror
                                <span>{{ $post->feature_image }}</span>
                            </div>
                        </div>
                        <div class="form-section">
                            <label for="description">Description</label>
                            <textarea name="description" id="summernote">
                                {{ $post->description }}
                            </textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="form-section col-md-4">
                                <input type="hidden" value="0" name="is_featured">
                                <input type="checkbox" value="1" {{ $post->is_featured == 1 ? 'checked' : '' }}
                                    name="is_featured">

                                <label for="is_featured">Is featured Post</label>
                                @error('is_featured')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-section col-md-4">
                                <input type="hidden" value="0" name="is_popular">
                                <input type="checkbox" value="1" name="is_popular"
                                    {{ $post->is_popular == 1 ? 'checked' : '' }}>

                                <label for="is_popular">Is Popular Post</label>
                                @error('is_popular')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-section col-md-4">
                                <input type="hidden" value="0" name="flash_post">
                                <input type="checkbox" value="1" name="flash_post"
                                    {{ $post->flash_post == 1 ? 'checked' : '' }}>

                                <label for="flash_post">Is Popular Post</label>
                                @error('flash_post')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                        <div class="submit-buttom float-right">
                            <button type="submit" class="btn btn-info">Update Post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
