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
            <div class="post-info-wrapper">
                <div class="text-center post-heading">
                    <h2>{{ $post->heading }}</h2>
                </div>
                <div class="text-center post-sub-heading">
                    <h5>{{ $post->sub_heading }}</h5>
                </div>
                <div class="text-center post-auther">
                    <span>{{ $post->auther }}</span>
                </div>
                <div class="card post-description p-3">
                    <div class="row d-flex justify-content-around">
                        <div class="post-date">
                            <span>Post Date:{{ $post->post_date }}</span>
                        </div>
                        <div class="post-date">
                            <span>Post Time:{{ date('h:i A', strtotime($post->post_time)) }}</span>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="post-feature-image m-2 mr-0 aligh-center col-md-4">
                            <img src="{{ asset($post->feature_image) }}" alt="" srcset="" height="250"
                                width="300">
                        </div>
                        <div class="post-description col">
                            <p>{!! $post->description !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
