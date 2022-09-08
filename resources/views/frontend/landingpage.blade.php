@extends('frontend.layouts.frontend-master')
@section('content')
    <!-- Start Main News Area -->
    <section class="main-news-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @if ($flash_post)
                        <div class="single-main-news">
                            <a href="{{ route('single', ['slug' => $flash_post->slug]) }}">
                                <img class="large_figure"
                                    src="{{ asset($flash_post->feature_image) }}" alt="image">
                            </a>
                            <div class="news-content">
                                <div class="tag">{{ $flash_post->postCategory->name ?? '' }}</div>
                                <h3>
                                    <a href="{{ route('single', $flash_post->slug) }}">{{ $flash_post->heading ?? '' }}</a>
                                </h3>
                                <span><a href="">{{ $flash_post->auther }}</a> /
                                    {{ $flash_post->post_date ?? '' }}</span>
                            </div>
                        </div>
                    @endif
                </div>

                <div class="col-lg-4">
                    @foreach ($posts as $post)
                        <div class="single-main-news-box">
                            <a href="{{ route('single', ['slug' => $post->slug]) }}">
                                <img class="medium_figure" src="{{ $post->feature_image ?? '' }}" alt="image">
                            </a>
                            <div class="news-content">
                                <div class="tag">{{ $post->postCategory->name ?? '' }}</div>
                                <h3>
                                    <a href="{{ route('single', ['slug' => $post->slug]) }}">{{ Str::of($post->heading)->limit(40) }}</a>
                                </h3>
                                <span>{{ $post->post_date }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- End Main News Area -->
    {{-- ads section --}}
    <section class="m-3">
        <div class="container">
            <div class="row">
                <div>
                    <img src="{{ asset('frontend/assets/img/ads.gif') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    {{-- ads section end --}}

    <!-- Start Default News Area -->
    <section class="default-news-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="most-popular-news">
                        <div class="section-title">
                            <h2>Most popular</h2>
                        </div>

                        <div class="row">
                            @foreach ($popular_posts->chunk(3) as $three)
                                @foreach ($three as $post)
                                    <div class="col-lg-6">
                                        <div class="most-popular-post">
                                            <div class="row align-items-center">
                                                <div class="col-lg-4 col-sm-4">
                                                    <div class="post-image">
                                                        <a href="{{ route('single', ['slug' => $post->slug]) }}">
                                                            <img class="small-figure" src="{{ asset($post->feature_image ?? '') }}"
                                                                alt="image">
                                                        </a>
                                                    </div>
                                                <div class="col-lg-8 col-sm-8">
                                                    <div class="post-content">
                                                        <span>{{ $post->postCategory->name ?? '' }}</span>
                                                        <h3>
                                                            <a href="{{ route('single', ['slug' => $post->slug]) }}">{{ $post->heading }}</a>
                                                        </h3>
                                                        <p>{{ $post->post_date }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            @endforeach
                        </div>
                    </div>

                    <div class="video-news">
                        <div class="section-title">
                            <h2>Top video</h2>
                        </div>

                        <div class="video-slides owl-carousel owl-theme">
                            @forelse ($videos as $video)
                                <div class="video-item">
                                    <div class="video-news-image">
                                        <a href="#">
                                            <img src="{{ asset($video->banner) }}" alt="image">
                                        </a>
                                        <a href="{{ $video->url }}" class="popup-youtube">
                                            <i class="fa-solid fa-circle-play"></i>
                                        </a>
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

                    <div class="politics-news">
                        <div class="section-title">
                            <h2>Politics</h2>
                        </div>

                        <div class="row">
                            @foreach ($politic_posts as $item)
                                <div class="col-lg-6">
                                    @foreach ($item->post->take(2) as $post)
                                        @if ($loop->first or $loop->depth == 2)
                                            <div class="single-politics-news">
                                                <div class="politics-news-image">
                                                    <a href="{{ route('single', ['slug' => $post->slug]) }}">
                                                        <img src="{{ asset($post->feature_image ?? '') }}" alt="image">
                                                    </a>
                                                </div>

                                                <div class="politics-news-content">
                                                    <span>{{ $post->postCategory->name ?? '' }}</span>
                                                    <h3>
                                                        <a href="{{ route('single', ['slug' => $post->slug]) }}">{{ $post->heading }}</a>
                                                    </h3>
                                                    <p><a href="#">{{$post->auther}}</a> / {{ $post->post_date }}</p>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            @endforeach

                            <div class="col-lg-6">
                                @foreach ($politic_posts as $item)
                                    @foreach ($item->post->take(8) as $post)
                                        @if ($loop->last == true or $loop->iteration > 2)
                                            <div class="politics-news-post">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-4 col-sm-4">
                                                        <div class="politics-news-image">
                                                            <a href="{{ route('single', ['slug' => $post->slug]) }}">
                                                                <img class="small-figure" src="{{ asset($post->feature_image ?? '') }}"
                                                                    alt="image">
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-8 col-sm-8">
                                                        <div class="politics-news-content">
                                                            <h3>
                                                                <a href="{{ route('single', ['slug' => $post->slug]) }}">{{ $post->heading }}</a>
                                                            </h3>
                                                            <p>{{ $post->post_date }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="business-news">
                        <div class="section-title">
                            <h2>Business</h2>
                        </div>

                        <div class="business-news-slides owl-carousel owl-theme">
                            @foreach ($business_posts as $item)
                                @foreach ($item->post as $post)
                                    <div class="single-business-news">
                                        <div class="business-news-image">
                                            <a href="{{ route('single', ['slug' => $post->slug]) }}">
                                                <img src="{{ asset($post->feature_image ?? '') }}" alt="image">
                                            </a>
                                        </div>

                                        <div class="business-news-content">
                                            <span>{{ $item->name }}</span>
                                            <h3>
                                                <a
                                                    href="{{ route('single', ['slug' => $post->slug]) }}">{{ $post->heading }}</a>
                                            </h3>
                                            <p><a href="#">{{$post->auther}}</a> / {{ $post->post_date }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            @endforeach
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="section-title">
                                <h2>Sports</h2>
                            </div>

                            @foreach ($sport_posts as $item)
                                @foreach ($item->post->take(4) as $post)
                                    <div class="single-sports-news">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4 col-sm-4">
                                                <div class="sports-news-image">
                                                    <a href="{{ route('single', ['slug' => $post->slug]) }}">
                                                        <img class="small-figure" src="{{ $post->feature_image }}" alt="image">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="col-lg-8 col-sm-8">
                                                <div class="sports-news-content">
                                                    <h3>
                                                        <a href="{{ route('single', ['slug' => $post->slug]) }}">{{ $post->heading }}</a>
                                                    </h3>
                                                    <p>{{ $post->post_date }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endforeach
                        </div>

                        <div class="col-lg-6">
                            <div class="section-title">
                                <h2>Tech</h2>
                            </div>

                            @foreach ($tech_posts as $item)
                                @foreach ($item->post->take(4) as $post)
                                    <div class="single-tech-news">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4 col-sm-4">
                                                <div class="tech-news-image">
                                                    <a href="{{ route('single', ['slug' => $post->slug]) }}">
                                                        <img class="small-figure" src="{{ $post->feature_image }}" alt="image">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="col-lg-8 col-sm-8">
                                                <div class="tech-news-content">
                                                    <h3>
                                                        <a href="{{ route('single', ['slug' => $post->slug]) }}">{{ $post->heading }}</a>
                                                    </h3>
                                                    <p>{{ $post->post_date }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endforeach
                        </div>
                    </div>

                    <div class="culture-news">
                        <div class="section-title">
                            <h2>Culture</h2>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                @foreach ($culture_posts as $item)
                                    @foreach ($item->post->take(2) as $post)
                                        @if ($loop->first or $loop->depth == 2)
                                            <div class="single-politics-news">
                                                <div class="politics-news-image">
                                                    <a href="{{ route('single', ['slug' => $post->slug]) }}">
                                                        <img src="{{ asset($post->feature_image ?? '') }}"
                                                            alt="image">
                                                    </a>
                                                </div>

                                                <div class="politics-news-content">
                                                    <span>{{ $post->postCategory->name ?? '' }}</span>
                                                    <h3>
                                                        <a href="{{ route('single', ['slug' => $post->slug]) }}">{{ $post->heading }}</a>
                                                    </h3>
                                                    <p><a href="#">{{$post->auther}}</a> / {{ $post->post_date }}</p>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endforeach
                            </div>

                            <div class="col-lg-6">
                                @foreach ($culture_posts as $item)
                                    @foreach ($item->post->take(6) as $post)
                                        @if ($loop->last == true or $loop->iteration > 2)
                                            <div class="politics-news-post">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-4 col-sm-4">
                                                        <div class="politics-news-image">
                                                            <a href="{{ route('single', ['slug' => $post->slug]) }}">
                                                                <img class="small-figure" src="{{ asset($post->feature_image ?? '') }}"
                                                                    alt="image">
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-8 col-sm-8">
                                                        <div class="politics-news-content">
                                                            <h3>
                                                                <a href="{{ route('single', ['slug' => $post->slug]) }}">{{ $post->heading }}</a>
                                                            </h3>
                                                            <p>{{ $post->post_date }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="health-news">
                        <div class="section-title">
                            <h2>Health</h2>
                        </div>

                        <div class="health-news-slides owl-carousel owl-theme">
                            @foreach ($health_posts as $item)
                                @foreach ($item->post as $post)
                                    <div class="single-health-news">
                                        <div class="health-news-image">
                                            <a href="{{ route('single', ['slug' => $post->slug]) }}">
                                                <img class="mediuml_figure" src="{{ $post->feature_image }}"
                                                    alt="image">
                                            </a>
                                        </div>

                                        <div class="health-news-content">
                                            <span>{{ $post->postCategory->name ?? '' }}</span>
                                            <h3>
                                                <a href="{{ route('single', ['slug' => $post->slug]) }}">{{ $post->heading }}</a>
                                            </h3>
                                            <p><a href="#">{{$post->auther}}</a> / {{ $post->post_date }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            @endforeach
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
