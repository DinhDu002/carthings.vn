@extends('app')

@section('title', 'Car things - Category grid')

@section('categories-page-search')
    <!-- Categories Page Search-->
    <section class="categories-page-search">
        <div class="container">
            <div class="row">
                <div class="main-search-box text-center">
                    <form class="row">
                        <div class="col-md-4 col-lg-4 search-input">
                            <input type="text" placeholder="What are you looking for...?"
                                   class="form-control input-lg search-form">
                        </div>
                        <div class="col-md-3 col-lg-3 search-input">
                            <select class="form-control input-lg search-form">
                                <option selected="">All Category</option>
                                <option>Hand Phone</option>
                                <option>Motorcycle</option>
                                <option>Properti</option>
                            </select>
                        </div>
                        <div class="col-md-3 col-lg-3 search-input">
                            <select class="form-control input-lg search-form">
                                <option selected="">All Location</option>
                                <option>New York</option>
                                <option>Washington</option>
                                <option>California</option>
                            </select>
                        </div>
                        <div class="col-md-2 col-lg-2 search-input">
                            <button class="btn btn-primary btn-lg simple-btn btn-block">
                                <i class="fa fa-search"></i> Search
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="breadcumb_section search_breadcumb">
                        <div class="page_pagination">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                <li><a href="{{ route('categories') }}">Categories</a></li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                <li><a href="#"><i class="fa fa-glass"></i> Restaurant </a></li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                <li>Cafe</li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                <li>There are many variations</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Categories Page Search-->
@endsection

@section('single-detail')
    <!-- Single Detail -->
    <section class="single-detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-6 col-lg-8">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="item single-ads">
                                <div class="item-ads-grid margin-bottom-none">
                                    <div class="item-title-single">
                                        <a href="{{ route('single') }}">
                                            <h1>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h1>
                                        </a>
                                        <div class="item-meta">
                                            <ul>
                                                <li class="item-date"><i class="fa fa-clock-o"></i> Today 10.35 AM</li>
                                                <li class="item-cat"><i class="fa fa-glass"></i> <a
                                                            href="{{ route('categories') }}">Restaurant</a> , <a href="{{ route('categories') }}">Cafe</a>
                                                </li>
                                                <li class="item-location"><a href="#"><i class="fa fa-map-marker"></i> Buffalo </a>
                                                </li>
                                                <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="item-img-grid">
                                        <div class="favourite-icon">
                                            <a class="fav-btn" title="" data-placement="bottom" data-toggle="tooltip" href="#"
                                               data-original-title="Save Ad">115 <i class="fa fa-heart"></i></a>
                                        </div>
                                        <div id="sync1" class="owl-carousel">
                                            <div class="item"><img alt="" src="images/single-ads/big/1.jpg"
                                                                   class="img-responsive img-center"></div>
                                            <div class="item"><img alt="" src="images/single-ads/big/2.jpg"
                                                                   class="img-responsive img-center"></div>
                                            <div class="item"><img alt="" src="images/single-ads/big/3.jpg"
                                                                   class="img-responsive img-center"></div>
                                            <div class="item"><img alt="" src="images/single-ads/big/4.jpg"
                                                                   class="img-responsive img-center"></div>
                                            <div class="item"><img alt="" src="images/single-ads/big/5.jpg"
                                                                   class="img-responsive img-center"></div>
                                            <div class="item"><img alt="" src="images/single-ads/big/6.jpg"
                                                                   class="img-responsive img-center"></div>
                                            <div class="item"><img alt="" src="images/single-ads/big/7.jpg"
                                                                   class="img-responsive img-center"></div>
                                            <div class="item"><img alt="" src="images/single-ads/big/8.jpg"
                                                                   class="img-responsive img-center"></div>
                                        </div>
                                        <div id="sync2" class="owl-carousel">
                                            <div class="item"><img alt="" src="images/single-ads/small/1.jpg"
                                                                   class="img-responsive img-center"></div>
                                            <div class="item"><img alt="" src="images/single-ads/small/2.jpg"
                                                                   class="img-responsive img-center"></div>
                                            <div class="item"><img alt="" src="images/single-ads/small/3.jpg"
                                                                   class="img-responsive img-center"></div>
                                            <div class="item"><img alt="" src="images/single-ads/small/4.jpg"
                                                                   class="img-responsive img-center"></div>
                                            <div class="item"><img alt="" src="images/single-ads/small/5.jpg"
                                                                   class="img-responsive img-center"></div>
                                            <div class="item"><img alt="" src="images/single-ads/small/6.jpg"
                                                                   class="img-responsive img-center"></div>
                                            <div class="item"><img alt="" src="images/single-ads/small/7.jpg"
                                                                   class="img-responsive img-center"></div>
                                            <div class="item"><img alt="" src="images/single-ads/small/8.jpg"
                                                                   class="img-responsive img-center"></div>
                                        </div>
                                    </div>
                                    <div class="single-item-meta">
                                        <h4><strong>Spesification</strong></h4>
                                        <table class="table table-condensed table-hover table-bordered">
                                            <tbody>
                                            <tr>
                                                <td>Classified ID</td>
                                                <td>012345</td>
                                            </tr>
                                            <tr>
                                                <td>Condition</td>
                                                <td>New</td>
                                            </tr>
                                            <tr>
                                                <td>Brand</td>
                                                <td>Samsung</td>
                                            </tr>
                                            <tr>
                                                <td>Payments</td>
                                                <td>PayPal, Credit Card</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <h4><strong>Description</strong></h4>
                                        <p>
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                                            sit aspernatur aut odit aut fugit,sunt explicabo. Nemo enim ipsam voluptatem quia
                                            voluptas sit aspernatur aut odit aut fugit,sunt explicabo. Nemo enim ipsam voluptatem
                                            quia voluptas sit aspernatur aut odit aut fugit,sunt explicabo. Nemo enim ipsam
                                            voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
                                            dolores eos qui ratione voluptatem sequi nesciunt.
                                        </p>
                                        <ul>
                                            <li><i class="fa fa-angle-right fa-fw" aria-hidden="true"></i> Geotagging &ndash; add
                                                location info to your photos</li>
                                            <li><i class="fa fa-angle-right fa-fw" aria-hidden="true"></i> Object tracking &ndash;
                                                lock focus on a specific object</li>
                                            <li><i class="fa fa-angle-right fa-fw" aria-hidden="true"></i> Red-eye reduction</li>
                                            <li><i class="fa fa-angle-right fa-fw" aria-hidden="true"></i> Image capture, supported
                                                file format: JPEG</li>
                                            <li><i class="fa fa-angle-right fa-fw" aria-hidden="true"></i> Image playback,
                                                supported file formats: BMP, GIF, JPEG, PNG; WebP</li>
                                            <li><i class="fa fa-angle-right fa-fw" aria-hidden="true"></i> Video capture, supported
                                                file formats: 3GPP, MP4</li>
                                            <li><i class="fa fa-angle-right fa-fw" aria-hidden="true"></i> Video playback,
                                                supported file formats: 3GPP, MP4, M4V, AvI, XVID, WEBM</li>
                                        </ul>
                                    </div>
                                    <div class="item-footer">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-5">
                                                <span class="item-views"> <i class="fa fa-eye"></i> Ad Views : <b>6544</b></span>
                                            </div>
                                            <div class="col-lg-12 col-md-7 text-right-md">
                                                <div class="share-widget text-right">
                                                    <span>Share This Ad : </span>
                                                    <div class="social-links social-bg pull-right">
                                                        <ul>
                                                            <li><a class="fa fa-twitter" target="_blank" href="#"></a></li>
                                                            <li><a class="fa fa-facebook" target="_blank" href="#"></a></li>
                                                            <li><a class="fa fa-google-plus" target="_blank" href="#"></a></li>
                                                            <li><a class="fa fa-instagram" target="_blank" href="#"></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-lg-4">
                    <div class="price-widget short-widget">
                        <i class="fa fa-dollar"></i>
                        <strong>235.00</strong>
                    </div>
                    <div class="widget user-widget">
                        <div class="widget-body text-center">
                            <img class="user-dp" alt="User Image" src="images/user.jpg">
                            <span class="user-status user-online"></span>
                            <!-- <span class="user-status user-offline"></span> -->
                            <h2 class="seller-name">John Doe</h2>
                            <p class="seller-detail"><i class="fa fa-map-marker"></i> Location: <strong>Orlando</strong><br>
                                <i class="fa fa-clock-o"></i> Joined : <strong>21 June 2020</strong>
                            </p>
                        </div>
                        <div class="widget-footer">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="profile-action-btns text-center">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="0133 4568 9876"
                                           class="btn btn-primary btn-lg"><i class="fa fa-whatsapp"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Send Message"
                                           class="btn btn-primary btn-lg"><i class="fa fa-envelope-o"></i></a>
                                        <a data-toggle="collapse" data-parent="#accordion" href="#popup" title="Live Chat"
                                           class="btn btn-primary btn-lg"><i class="fa fa-comment-o"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="listing-filters">
                        <div class="widget listing-filter-block">
                            <div class="widget-header">
                                <h1>Similar ads</h1>
                            </div>
                            <div class="widget-body">
                                <div class="similar-ads">
                                    <a href="{{ route('single') }}">
                                        <div class="similar-ad-left">
                                            <img class="img-responsive img-center" src="images/categories/cars/1.png" alt="">
                                        </div>
                                        <div class="similar-ad-right">
                                            <h4>Duis autem vel eum iriure dolor in hendrerit in vulputate velit .</h4>
                                            <p><i class="fa fa-dollar"></i> 450 - <i class="fa fa-map-marker"></i> Buffalo </p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a>
                                </div>
                                <div class="similar-ads">
                                    <a href="{{ route('single') }}">
                                        <div class="similar-ad-left">
                                            <img class="img-responsive img-center" src="images/categories/restaurant/1.png" alt="">
                                        </div>
                                        <div class="similar-ad-right">
                                            <h4>Duis autem vel eum iriure dolor in hendrerit in vulputate velit .</h4>
                                            <p><i class="fa fa-dollar"></i> 450 - <i class="fa fa-map-marker"></i> Buffalo </p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a>
                                </div>
                                <div class="similar-ads">
                                    <a href="{{ route('single') }}">
                                        <div class="similar-ad-left">
                                            <img class="img-responsive img-center" src="images/categories/pets/1.png" alt="">
                                        </div>
                                        <div class="similar-ad-right">
                                            <h4>Duis autem vel eum iriure dolor in hendrerit in vulputate velit .</h4>
                                            <p><i class="fa fa-dollar"></i> 450 - <i class="fa fa-map-marker"></i> Buffalo </p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a>
                                </div>
                                <div class="similar-ads">
                                    <a href="{{ route('single') }}">
                                        <div class="similar-ad-left">
                                            <img class="img-responsive img-center" src="images/categories/real_estate/2.png"
                                                 alt="">
                                        </div>
                                        <div class="similar-ad-right">
                                            <h4>Duis autem vel eum iriure dolor in hendrerit in vulputate velit .</h4>
                                            <p><i class="fa fa-dollar"></i> 450 - <i class="fa fa-map-marker"></i> Buffalo </p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a>
                                </div>
                                <div class="similar-ads">
                                    <a href="{{ route('single') }}">
                                        <div class="similar-ad-left">
                                            <img class="img-responsive img-center" src="images/categories/cars/1.png" alt="">
                                        </div>
                                        <div class="similar-ad-right">
                                            <h4>Duis autem vel eum iriure dolor in hendrerit in vulputate velit .</h4>
                                            <p><i class="fa fa-dollar"></i> 450 - <i class="fa fa-map-marker"></i> Buffalo </p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a>
                                </div>
                                <div class="similar-ads">
                                    <a href="{{ route('single') }}">
                                        <div class="similar-ad-left">
                                            <img class="img-responsive img-center" src="images/categories/job/1.png" alt="">
                                        </div>
                                        <div class="similar-ad-right">
                                            <h4>Duis autem vel eum iriure dolor in hendrerit in vulputate velit .</h4>
                                            <p><i class="fa fa-dollar"></i> 450 - <i class="fa fa-map-marker"></i> Buffalo </p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget listing-filter-block filter-categories margin-bottom-none">
                        <div class="widget-header">
                            <h1>Safety Tips</h1>
                        </div>
                        <div class="widget-body">
                            <ul class="trends">
                                <li><i class="fa fa-fw fa-key"></i> Morbi ut tellus ac leo</li>
                                <li><i class="fa fa-fw fa-key"></i> Varius onec rhons</li>
                                <li><i class="fa fa-fw fa-key"></i> Polutpat ras lorem</li>
                                <li><i class="fa fa-fw fa-key"></i> Luctus nec seded justo</li>
                                <li><i class="fa fa-fw fa-key"></i> Morbi ut tellus ac leo</li>
                                <li><i class="fa fa-fw fa-key"></i> Varius onec rhons</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Category List -->
@endsection
