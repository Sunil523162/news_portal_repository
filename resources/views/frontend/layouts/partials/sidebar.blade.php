<aside class="widget-area">
    <section class="widget widget_latest_news_thumb">
        <h3 class="widget-title">Latest news</h3>

        @foreach ($latest_posts as $post)
            <article class="item">
                <a href="{{route('single',['slug'=>$post->slug])}}" class="thumb">
                    <span class="fullimage cover bg1" role="img"
                        style="background-image: url({{ asset($post->feature_image ?? '') }});"></span>
                </a>
                <div class="info">
                    <h4 class="title usmall"><a href="{{route('single',['slug'=>$post->slug])}}">{{ $post->heading }}</a></h4>
                    <span>{{ $post->post_date }}</span>
                </div>
            </article>
        @endforeach
    </section>

    <section class="widget widget_latest_news_thumb">
        <h3 class="widget-title">Latest news</h3>

        @foreach ($latest_posts as $post)
            <article class="item">
                <a href="{{route('single',['slug'=>$post->slug])}}" class="thumb">
                    <span class="fullimage cover bg1" role="img"
                        style="background-image: url({{ asset($post->feature_image ?? '') }});"></span>
                </a>
                <div class="info">
                    <h4 class="title usmall"><a href="{{route('single',['slug'=>$post->slug])}}">{{ $post->heading }}</a></h4>
                    <span>{{ $post->post_date }}</span>
                </div>
            </article>
        @endforeach
    </section>



    <section class="widget widget_stay_connected">
        <h3 class="widget-title">Stay connected</h3>

        <ul class="stay-connected-list">
            <li>
                <a href="#">
                    <i class='bx bxl-facebook'></i>
                    120,345 Fans
                </a>
            </li>

            <li>
                <a href="#" class="twitter">
                    <i class='bx bxl-twitter'></i>
                    25,321 Followers
                </a>
            </li>

            <li>
                <a href="#" class="linkedin">
                    <i class='bx bxl-linkedin'></i>
                    7,519 Connect
                </a>
            </li>

            <li>
                <a href="#" class="youtube">
                    <i class='bx bxl-youtube'></i>
                    101,545 Subscribers
                </a>
            </li>

            <li>
                <a href="#" class="instagram">
                    <i class='bx bxl-instagram'></i>
                    10,129 Followers
                </a>
            </li>

            <li>
                <a href="#" class="wifi">
                    <i class='bx bx-wifi'></i>
                    952 Subscribers
                </a>
            </li>
        </ul>
    </section>

    <section class="widget widget_newsletter">
        <img src="{{ asset('frontend/assets/img/sideads.gif') }}" alt="">
    </section>

    <section class="widget widget_popular_posts_thumb">
        <h3 class="widget-title">Popular posts</h3>

        @foreach ($popular_posts as $post)
            <article class="item">
                <a href="{{route('single',['slug'=>$post->slug])}}" class="thumb">
                    <span class="fullimage " role="img"
                        style="background-image: url({{ asset($post->feature_image ?? '') }});"></span>
                </a>
                <div class="info">
                    <h4 class="title usmall">
                        <a href="{{route('single',['slug'=>$post->slug])}}">{{ $post->heading }}</a>
                    </h4>
                    <span>{{ $post->post_date }}</span>
                </div>
            </article>
        @endforeach
    </section>

    {{-- <section class="widget widget_most_shared">
        <h3 class="widget-title">Most shared</h3>

        <div class="single-most-shared">
            <div class="most-shared-image">
                <a href="">
                    <img src="{{ asset('frontend/assets/img/most-shared/most-shared-1.jpg') }}"
                        alt="image">
                </a>

                <div class="most-shared-content">
                    <h3>
                        <a href="#">All the highlights from western fashion week summer
                            2022</a>
                    </h3>
                    <p><a href="#">Patricia</a> / 28 September, 2022</p>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="widget widget_tag_cloud">
        <h3 class="widget-title">Tags</h3>

        <div class="tagcloud">
            <a href="/news">News</a>
            <a href="/business">Business</a>
            <a href="/health">Health</a>
            <a href="/politics">Politics</a>
            <a href="/sport">Sport</a>
            <a href="/technology">Tech</a>
            <a href="/video">Video</a>
            <a href="/culture">Culture</a>
        </div>
    </section>

    <section class="widget widget_instagram">
        <img src="{{ asset('frontend/assets/img/sideadds.gif') }}" alt="">
    </section>
    <section class="widget widget_instagram">
        <img src="{{ asset('frontend/assets/img/sideadss.gif') }}" alt="">
    </section>
</aside>
