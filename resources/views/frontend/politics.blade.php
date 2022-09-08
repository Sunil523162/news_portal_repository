


<!--  -->
@extends('frontend.layouts.frontend-master')
@section('content')
    <!-- Start Page Banner -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Politics</h2>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>Politics</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->

    <!-- Start Default News Area -->
    <section class="default-news-area ptb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @forelse ($politic_posts as $item)
                        @foreach ($item->post as $post)
                            <div class="single-politics-news">
                                <div class="row align-items-center">
                                    <div class="col-lg-4">
                                        <div class="politics-news-image">
                                            <a href="{{ route('single', ['slug' => $post->slug]) }}">
                                                <img src="{{ $post->feature_image }}" alt="image">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-8">
                                        <div class="politics-news-content-box">
                                            <span>{{ $item->name }}</span>
                                            <h3>
                                                <a href="{{ route('single', ['slug' => $post->slug]) }}">{{ $post->heading }}</a>
                                            </h3>
                                            <p>{!! Str::of($post->description)->limit(400) !!}</p>

                                            <div class="date">{{ $post->post_date }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    @empty
                        <span>No politics post found</span>
                    @endforelse
                </div>

                <div class="col-lg-4">
                    @include('frontend.layouts.partials.sidebar')
                </div>
            </div>
    </section>
    <!-- End Default News Area -->
@endsection

