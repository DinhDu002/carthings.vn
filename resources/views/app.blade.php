<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title', 'Car things - Home')</title>

    <!-- Favicon Icon -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('plugins/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/owl-carousel/owl.theme.css') }}">

    <!-- Font Awesome -->
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
</head>

<body>

    <!-- Preloder -->
    <div id="preloader"></div>
    <!-- End Preloder -->


    <!-- Navbar -->
    <nav class="navbar top-navbar navbar-expand-lg navbar-light bg-white p-0">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}"><img alt="logo" src="{{ asset('images/logo.png') }}"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false"> Categories Pages <b
                                    class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('categories') }}"><i class="fa fa-fw fa-angle-right"></i> Categories</a>
                            </li>
                            <li>
                                <a href="{{ route('category-grid') }}"><i class="fa fa-fw fa-angle-right"></i> Category Grid</a>
                            </li>
                            <li>
                                <a href="{{ route('single') }}"><i class="fa fa-fw fa-angle-right"></i> Single Item</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="{{ route('pricing') }}">Pricing</a></li>
                    <li><a href="{{ route('faq') }}">FAQ</a></li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false">Blog <b
                                    class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('blog') }}"><i class="fa fa-fw fa-angle-right"></i> Blog</a>
                            </li>
                            <li>
                                <a href="{{ route('blog_details') }}"><i class="fa fa-fw fa-angle-right"></i> Blog Details</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false"> Other Pages <b
                                    class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('create_post') }}"><i class="fa fa-fw fa-angle-right"></i> Post Your Ad</a>
                            </li>
                            <li>
                                <a href="{{ route('settings') }}"><i class="fa fa-fw fa-angle-right"></i> Settings</a>
                            </li>
                            <li>
                                <a href="{{ route('close-account') }}"><i class="fa fa-fw fa-angle-right"></i> Close account</a>
                            </li>
                            <li>
                                <a href="{{ route('my-ads') }}"><i class="fa fa-fw fa-angle-right"></i> My Ads</a>
                            </li>
                            <li>
                                <a href="{{ route('favourite') }}"><i class="fa fa-fw fa-angle-right"></i> Favourite Ads</a>
                            </li>
                            <li>
                                <a href="{{ route('privacy') }}"><i class="fa fa-fw fa-angle-right"></i> Privacy Policy</a>
                            </li>
                            <li>
                                <a href="{{ route('404') }}"><i class="fa fa-fw fa-angle-right"></i> 404</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                @if (true)
                    <!-- hiển thị nội dung cho người dùng đã đăng nhập -->
                    <div class="user-dropdown pull-right">
                        <ul class="nav navbar-right top-nav">
                            <li class="dropdown">
                                <a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown"><img
                                            src="images/user.jpg" alt="User Image" class="user-dp"> Jhone Doe <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('settings') }}"><i class="fa fa-fw fa-user"></i> Profile</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('my-ads') }}"><i class="fa fa-fw fa-pencil"></i> My Ads</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('favourite') }}"><i class="fa fa-fw fa-heart"></i> Favourite Ads</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('ad-alerts') }}"><i class="fa fa-fw fa-clock-o"></i> Ad Alerts</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('settings') }}"><i class="fa fa-fw fa-gear"></i> Settings</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('login') }}"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                @else
                    <!-- hiển thị nội dung cho người dùng chưa đăng nhập -->
                    <div class="user-login pull-right">
                        <a href="{{ route('signup') }}">REGISTER</a>
                        <span>or</span>
                        <a class="btn btn-md btn-primary" href="{{ route('login') }}">Sign In</a>
                    </div>
                @endif
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Home -->
    @yield('search-box')
    @yield('featured-products')
    @yield('categories-list')
    <!-- Home End -->

    <!-- categories -->
    @yield('categories-page-search')
    @yield('main-categories-list')
    <!-- categories End -->

    <!-- category-grid -->
    @yield('category-grid')
    <!-- category-grid End -->

    <!-- single-detail -->
    @yield('single-detail')
    <!-- single-detail End -->

    <!-- Breadcumb -->
    @yield('Breadcumb')
    <!-- Breadcumb End -->

    <!-- pricing-table -->
    @yield('pricing-table')
    <!-- pricing-table End -->

    <!-- contact -->
    @yield('contact')
    <!-- contact End -->

    <!-- faq -->
    @yield('faq')
    <!-- faq End -->

    <!-- blog -->
    @yield('blog')
    <!-- blog End -->

    <!-- blog-details -->
    @yield('blog-details')
    <!-- blog-details End -->

    <!-- create-post -->
    @yield('create-post')
    <!-- create-post End -->

    <!-- settings -->
    @yield('settings')
    <!-- settings End -->

    <!-- close-account -->
    @yield('close-account')
    <!-- close-account End -->

    <!-- my-ads -->
    @yield('my-ads')
    <!-- my-ads End -->

    <!-- favourite-ads -->
    @yield('favourite-ads')
    <!-- favourite-ads End -->

    <!-- privacy-policy -->
    @yield('privacy-policy')
    <!-- privacy-policy End -->

    <!-- my-alerts -->
    @yield('my-alerts')
    <!-- my-alerts End -->

    <!-- signup -->
    @yield('signup')
    <!-- signup End -->

    <!-- login -->
    @yield('login')
    <!-- login End -->

    <!-- forgot-password -->
    @yield('forgot-password')
    <!-- forgot-password End -->

    <!-- Footer -->
    <footer>
        <section class="footer-Content">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 footer-osahan">
                        <div class="footer-widget">
                            <h3 class="block-title">About</h3>
                            <div class="textwidget">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque lobortis tincidunt est, et
                                    euismod purus suscipit quis. Etiam euismod ornare elementum. Sed ex est, Sed ex est,
                                    consectetur eget consectetur, Lorem ipsum dolor sit amet...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 footer-osahan">
                        <div class="footer-widget">
                            <h3 class="block-title">Categories</h3>
                            <ul class="menu">
                                <li><a href="#"><span>562</span> Restaurant</a></li>
                                <li><a href="#"><span>451</span> Real Estate</a></li>
                                <li><a href="#"><span>352</span> Cars</a></li>
                                <li><a href="#"><span>312</span> Shopping</a></li>
                                <li><a href="#"><span>262</span> Job</a></li>
                                <li><a href="#"><span>152</span> Hotels</a></li>
                                <li><a href="#"><span>102</span> Services</a></li>
                                <li><a href="#"><span>100</span> Pets</a></li>
                                <li><a href="#"><span>95</span> Cars</a></li>
                                <li><a href="#"><span>85</span> Shopping</a></li>
                                <li><a href="#"><span>50</span> Job</a></li>
                                <li><a href="#"><span>25</span> Hotels</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 footer-osahan">
                        <div class="footer-widget">
                            <h3 class="block-title">Latest Post</h3>
                            <ul class="blog-footer">
                                <li>
                                    <a href="#">Lorem ipsum dolor sit amet, quem...</a>
                                    <span class="post-date"><i class="fa fa-calendar" aria-hidden="true"></i> March 12,
                                  2020</span>
                                </li>
                                <li>
                                    <a href="#">Full Width Media Post Lorem ipsum..</a>
                                    <span class="post-date"><i class="fa fa-calendar" aria-hidden="true"></i> September 25,
                                  2020</span>
                                </li>
                                <li>
                                    <a href="#">Perfect Video Post Lorem ipsum..</a>
                                    <span class="post-date"><i class="fa fa-calendar" aria-hidden="true"></i> November 19,
                                  2020</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 footer-osahan">
                        <div class="footer-widget">
                            <h3 class="block-title">Quick Links</h3>
                            <ul class="menu">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Pricing Plans</a></li>
                                <li><a href="#">Categories</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Team</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Help</a></li>
                                <li><a href="#">Advertise With Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="bottom-social-icons social-icon text-center">
                            <a href="#" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank" class="dribble"><i class="fa fa-dribbble"></i></a>
                            <a href="#" target="_blank" class="youtube"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" target="_blank" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>
                        <div class="site-info text-center">
                            <p>&copy; Copyright 2020 OBootstrap Classified . All Rights Reserved<br> Made with <i
                                        class="fa fa-heart"></i> by <a target="_blank"
                                                                       href="https://www.facebook.com/iamgurdeeposahan"><strong>Osahan Studio</strong></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Post Ad -->
    <a href="{{ route('create_post') }}" data-toggle="tooltip" data-placement="left" title="Post Your Ad"
       class="btn btn-danger btn-lg post-free-add-btn"><i class="fa fa-pencil"></i></a>
    <!-- End Post Ad -->

    <!-- Back To Top -->
    <a href="#" id="back-to-top" data-toggle="tooltip" data-placement="left" title="Back To Top"
       class="btn btn-default btn-md bg-white"><i class="fa fa-chevron-up"></i></a>
    <!-- End Back To Top -->

    <!-- Chat Popup -->
    <div id="accordion">
        <div class="popup-box chat-popup">
            <div class="popup-head">
                <div class="popup-head-left pull-left">
                    <a data-toggle="collapse" data-parent="#accordion" href="#popup">
                        <img src="{{ asset('images/user.jpg') }}" alt=""> John Doe
                        <small>Online</small>
                    </a>
                </div>
                <div class="popup-head-right pull-right">
                    <div class="btn-group">
                        <button class="chat-header-button" data-toggle="dropdown" type="button" aria-expanded="false">
                            <i class="fa fa-cog" aria-hidden="true"></i> </button>
                        <ul role="menu" class="dropdown-menu pull-right">
                            <li><a href="#">Media</a></li>
                            <li><a href="#">Block</a></li>
                            <li><a href="#">Clear Chat</a></li>
                            <li><a href="#">Email Chat</a></li>
                        </ul>
                    </div>
                    <button data-toggle="collapse" data-parent="#accordion" href="#popup"
                            class="chat-header-button pull-right" type="button"><i class="fa fa-power-off"
                                                                                   aria-hidden="true"></i></button>
                </div>
            </div>
            <div id="popup" class="collapse">
                <div class="popup-messages">
                    <div class="direct-chat-messages">
                        <div class="chat-box-single-line">
                            <abbr class="timestamp">October 8th, 2015</abbr>
                        </div>
                        <!-- Message. Default to the left -->
                        <div class="direct-chat-msg doted-border">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name pull-left">Osahan</span>
                            </div>
                            <!-- /.direct-chat-info -->
                            <img alt="message user image" src="{{ asset('images/user.jpg') }}" class="direct-chat-img">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                Hey bro, how’s everything going ?
                            </div>
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-timestamp pull-right">3.36 PM</span>
                            </div>
                            <div class="direct-chat-info clearfix">
                            <span class="direct-chat-img-reply-small pull-left">
                            </span>
                                <span class="direct-chat-reply-name">Singh</span>
                            </div>
                            <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->
                        <div class="chat-box-single-line">
                            <abbr class="timestamp">October 9th, 2015</abbr>
                        </div>
                        <!-- Message. Default to the left -->
                        <div class="direct-chat-msg doted-border">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name pull-left">Osahan</span>
                            </div>
                            <!-- /.direct-chat-info -->
                            <img alt="" src="{{ asset('images/user.jpg') }}" class="direct-chat-img"><!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                Hey bro, how’s everything going ?
                            </div>
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-timestamp pull-right">3.36 PM</span>
                            </div>
                            <div class="direct-chat-info clearfix">
                                <img alt="" src="{{ asset('images/blog/user/a3.jpg') }}" class="direct-chat-img big-round">
                                <span class="direct-chat-reply-name">Singh</span>
                            </div>
                            <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->
                    </div>
                </div>
                <div class="popup-messages-footer">
                   <textarea id="status_message" placeholder="Type a message..." rows="10" cols="40"
                             name="message"></textarea>
                    <div class="btn-footer">
                        <button class="bg_none"><i class="glyphicon glyphicon-film"></i> </button>
                        <button class="bg_none"><i class="glyphicon glyphicon-camera"></i> </button>
                        <button class="bg_none"><i class="glyphicon glyphicon-paperclip"></i> </button>
                        <button class="bg_none pull-right"><i class="glyphicon glyphicon-thumbs-up"></i> </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Chat Popup -->

    <!-- jQuery -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>

    <!-- Bootstrap JavaScript -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- Owl Carousel -->
    <script src="{{ asset('plugins/owl-carousel/owl.carousel.js') }}"></script>

    <!-- Custom js -->
    <script src="{{ asset('js/custom.js') }}"></script>

    <script src="{{ asset('plugins/bootstrap-filestyle/bootstrap-filestyle.js') }}"></script>
</body>

</html>
