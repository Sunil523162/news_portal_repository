@extends('frontend.layouts.frontend-master')
@section('content')
    <!-- Start Page Banner -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Culture</h2>
                <ul>
                    <li><a href="{{ route('landingpage') }}">Home</a></li>
                    <li>Culture</li>
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
                    @foreach ($culture_posts as $item)
                        @foreach ($item->post as $post)
                            <div class="single-business-news">
                                <div class="row align-items-center">
                                    <div class="col-lg-4">
                                        <div class="business-news-image">
                                            <a href="{{ route('single', ['slug' => $post->slug]) }}">
                                                <img src="{{ $post->feature_image }}" alt="image">
                                            </a>
                                        </div>
                                        </div>

                                    <div class="col-lg-8">
                                        <div class="business-news-content-box">
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
                    @endforeach
                    <div class="pagination-area">
                        <a href="#" class="prev page-numbers">
                            <i class='bx bx-chevron-left'></i>
                        </a>
                        <a href="#" class="page-numbers">1</a>
                        <span class="page-numbers current" aria-current="page">2</span>
                        <a href="#" class="page-numbers">3</a>
                        <a href="#" class="page-numbers">4</a>
                        <a href="#" class="next page-numbers">
                            <i class='bx bx-chevron-right'></i>
                        </a>
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
