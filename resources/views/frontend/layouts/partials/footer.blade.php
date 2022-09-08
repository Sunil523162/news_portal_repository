    <!-- Start Footer Area -->
    <section class="footer-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-widget">
                        <a href="#">
                            <!--  <img src="assets/img/logo-3.png" alt="image"> -->
                        </a>
                        <p>Online news media possesses great importance because we have access to current happenings and
                            up-to-date information from around the world.</p>

                        <ul class="social">
                            <li>
                                <a href="#" class="facebook" target="_blank">
                                    <i class="fa-brands fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="twitter" target="_blank">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="pinterest" target="_blank">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="linkedin" target="_blank">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="linkedin" target="_blank">
                                    <i class="fa-brands fa-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-widget">
                        <h2>Recent post</h2>

                        <div class="post-content">
                            <div class="row align-items-center">
                                @foreach ($latest_posts as $post)
                                    <div class="col-md-4">
                                        <div class="post-image">
                                            <a href="{{ route('single', ['slug' => $post->slug]) }}">
                                                <img class="" src="{{ asset($post->feature_image ?? '') }}"
                                                    alt="image">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h4>
                                            <a
                                                href="{{ route('single', ['slug' => $post->slug]) }}">{{ $post->heading }}</a>
                                        </h4>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-widget">
                        <h2>Useful links</h2>

                        <ul class="useful-links-list">
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li>
                                <a href="news">News</a>
                            </li>
                            <li>
                                <a href="/business">Business</a>
                            </li>
                            <li>
                                <a href="/technology">Technology</a>
                            </li>
                            <li>
                                <a href="/politics">Politics</a>
                            </li>
                            <li>
                                <a href="/video">Video</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-widget">
                        <h2>Subscribe</h2>

                        <div class="widget-subscribe-content">
                            <p>Subscribe To Our Newsletter</p>
                            @if (\Session::has('success'))
                                <div class="alert alert-success">
                                    <p>{{ \Session::get('success') }}</p>
                                </div><br />
                            @endif
                            @if (\Session::has('failure'))
                                <div class="alert alert-danger">
                                    <p>{{ \Session::get('failure') }}</p>
                                </div><br />
                            @endif
                            <form method="POST" action="#">
                                @csrf
                        </div>
                        <div class="row">
                            <div class="col-md-8"></div>
                            <div class="form-group">
                                <label for="Email">Email:</label>
                                <input type="text" class="form-control" name="email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="form-group col-md-4">
                                <button type="submit" class="btn btn-success">Subscribe</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- End Footer Area -->

    <!-- Start Copy Right Area -->
    <div class="copyright-area">
        <div class="container">
            <div class="copyright-area-content">
                <p>
                    Copyrightby@SunilStha523@gmail.com
                    <a href="#" target="_blank">News Portal</a>
                </p>
            </div>
        </div>
    </div>
    <!-- End Copy Right Area -->

    <!-- Start Go Top Area -->
    <div class="go-top">
        <i class="fa-solid fa-angle-up"></i>
    </div>
    <!-- End Go Top Area -->
