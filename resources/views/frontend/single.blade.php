@extends('frontend.layouts.frontend-master')
@section('content')
    <!-- Start Page Banner -->
    {{-- <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Business</h2>
                <ul>
                    <li><a href="{{ route('landingpage') }}">Home</a></li>
                    <li>Business</li>
                </ul>
            </div>
        </div>
    </div> --}}
    <!-- End Page Banner -->

    <!-- Start Default News Area -->
    <section class="default-news-area ptb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-page">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <div class="business-news-image">
                                    <h3>
                                        <a href="#">{{ $individual_post->heading }}</a>
                                    </h3>
                                    <div class=" badge badge-success mb-3">{{ $individual_post->postCategory->name }}</div>

                                    <br>
                                    <a href="#">
                                        <img src="{{ asset($individual_post->feature_image) }}" alt="image">
                                    </a>
                                    <div class="date badge badge-danger mt-3">{{ $individual_post->post_date }}</div>
                                    <div class="float-right badge badge-danger mt-3">{{ $individual_post->auther }}</div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="business-news-content-box">
                                    <p class="single-description">{!! $individual_post->description !!}</p>

                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="fb-comments"
                                    data-href="https://developers.facebook.com//FortuneInfotechSolutions" data-width=""
                                    data-numposts="10"></div>
                            </div>
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
