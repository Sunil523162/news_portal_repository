@extends('frontend.layouts.frontend-master')
@section('content')
    <!-- Start Page Banner -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Video</h2>
                <ul>
                    <li><a href="{{ route('landingpage') }}">Home</a></li>
                    <li>Video</li>
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
                    <div class="video-news">
                        <div class="section-title">
                            <h2>Top video</h2>
                        </div>

                        <div class="video-slide">
                            @forelse ($videos as $video)
                                <div class="video-item mb-1">
                                    <div class="video-news-image">
                                        <a href="#">
                                            <img src="{{ asset($video->banner) }}" alt="image">
                                        </a>
                                        <a href="{{ $video->url }}"  class="popup-youtube">
                                            <i class="fa-solid fa-circle-play"></i></a>

                                    </div>
                                    <div class="video-news-content">
                                        <h3>
                                            <a href="{{ $video->url }}" target="_blank">{{ $video->heading }}</a>
                                        </h3>
                                        <span>{{ $video->post_date }}</span>
                                    </div>
                                </div>
                            @empty
                                <span>There are no video posted yet</span>
                            @endforelse
                        </div>
                    </div>

                </div>

                <div class="col-lg-4">
                    @include('frontend.layouts.partials.sidebar')
                </div>
            </div>
        </div>
    </section>
    <!-- End Default News Area -->
@endsection
