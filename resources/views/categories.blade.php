@extends('app')

@section('title', 'Car things - Categories')

@section('categories-page-search')
    <!-- Categories Page Search-->
    <section class="categories-page-search">
        <div class="container">
            <div class="row">
                <div class="main-search-box text-center">
                    <form action="#" method="GET" class="row">
                        <div class="col-md-4 col-lg-4 search-input">
                            <input placeholder="What are you looking for...?" class="form-control input-lg search-form"
                                   type="text">
                        </div>
                        <div class="col-md-3 col-lg-3 search-input">
                            <select class="form-control custom-select input-lg search-form">
                                <option selected="selected" value="">All Categories</option>
                                <option value="Vehicles" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled">
                                    - Vehicles - </option>
                                <option value="Cars"> Cars</option>
                                <option value="Motorcycles"> Motorcycles</option>
                                <option value="Boats"> Boats</option>
                                <option value="Vehicles"> Other Vehicles</option>
                                <option value="House" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled"> -
                                    House and Children -
                                </option>
                                <option value="Appliances"> Appliances</option>
                                <option value="Inside"> Inside</option>
                                <option value="Games"> Games and Clothing</option>
                                <option value="Garden"> Garden</option>
                                <option value="Multimedia" style="background-color:#E9E9E9;font-weight:bold;"
                                        disabled="disabled"> - Multimedia - </option>
                                <option value="Telephony"> Telephony</option>
                                <option value="Image"> Image and sound</option>
                                <option value="Real" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled"> -
                                    Real Estate -
                                </option>
                                <option value="Apartment"> Apartment</option>
                                <option value="Home"> Home</option>
                                <option value="Vacation"> Vacation Rentals</option>
                                <option value="Grounds"> Grounds</option>
                                <option value="Houseshares"> Houseshares</option>
                                <option value="Other real estate"> Other real estate</option>
                                <option value="Services" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled">
                                    - Services - </option>
                                <option value="Jobs"> Jobs</option>
                                <option value="Job application"> Job application</option>
                                <option value="Services"> Services</option>
                                <option value="dropoff" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled">
                                    - Extra - </option>
                                <option value="Other"> Other</option>
                            </select>
                        </div>
                        <div class="col-md-3 col-lg-3 search-input">
                            <select class="form-control custom-select input-lg search-form">
                                <option selected="selected" value="">All Locations</option>
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="DC">District Of Columbia</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="HI">Hawaii</option>
                                <option value="ID">Idaho</option>
                                <option value="IL">Illinois</option>
                                <option value="IN">Indiana</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NV">Nevada</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NM">New Mexico</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="ND">North Dakota</option>
                                <option value="OH">Ohio</option>
                                <option value="OK">Oklahoma</option>
                                <option value="OR">Oregon</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="SD">South Dakota</option>
                                <option value="TN">Tennessee</option>
                                <option value="TX">Texas</option>
                                <option value="UT">Utah</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WA">Washington</option>
                                <option value="WV">West Virginia</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WY">Wyoming</option>
                                <option value="Other-Locations">Other Locations</option>
                            </select>
                        </div>
                        <div class="col-md-2 col-lg-2 search-input">
                            <button class="btn btn-primary simple-btn btn-block">
                                <i class="fa fa-search"></i> Search
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <!-- Categories Page Nav -->
                <div class="all-categories-nav">
                    <a href="#Restaurant">
                        <i class="fa fa-glass shortcut-icon icon-blue"></i>
                        <p>Restaurant <small>5,56 Ads</small></p>
                    </a>
                    <a href="#Real_Estate">
                        <i class="fa fa-home shortcut-icon icon-green"></i>
                        <p>Real Estate <small>9,156 Ads</small></p>
                    </a>
                    <a href="#Cars">
                        <i class="fa fa-car shortcut-icon icon-brown"></i>
                        <p>Cars <small>6,16 Ads</small></p>
                    </a>
                    <a href="#Shopping">
                        <i class="fa fa-shopping-cart shortcut-icon icon-violet"></i>
                        <p>Shopping <small>98,156 Ads</small></p>
                    </a>
                    <a href="#Job">
                        <i class="fa fa-briefcase shortcut-icon icon-dark-blue"></i>
                        <p>Job <small>9,16 Ads</small></p>
                    </a>
                    <a href="#Hotels">
                        <i class="fa fa-building-o shortcut-icon icon-orange"></i>
                        <p>Hotels <small>6,56 Ads</small></p>
                    </a>
                    <a href="#Services">
                        <i class="fa fa-star shortcut-icon icon-light-blue"></i>
                        <p>Services <small>2,156 Ads</small></p>
                    </a>
                    <a href="#Pets">
                        <i class="fa fa-paw shortcut-icon icon-light-green"></i>
                        <p>Pets <small>9,156 Ads</small></p>
                    </a>
                </div>
                <!-- End Categories Page Nav -->
            </div>
        </div>
    </section>
    <!-- End Categories Page Search-->
@endsection

@section('main-categories-list')
    <!-- Categories List Page -->
    <section class="categories-list main-categories-list">
        <div class="container">
            <div id="Restaurant" class="row">
                <div class="col-lg-3 col-md-3 col-lg-3">
                    <div class="widget blue-widget">
                        <div class="widget-header">
                            <small>98,156 Ads</small>
                            <h1><i class="fa fa-glass shortcut-icon icon-blue"></i> Restaurant</h1>
                        </div>
                        <div class="widget-body">
                            <ul class="trends">
                                <li><a href="#">Cafe <span class="item-numbers">155</span></a></li>
                                <li><a href="#">Fast Food <span class="item-numbers">80</span></a></li>
                                <li><a href="#">Restaurants <span class="item-numbers">65</span></a></li>
                                <li><a href="#">Pubs <span class="item-numbers">35</span></a></li>
                                <li><a href="#">Food Truck <span class="item-numbers">12</span></a></li>
                                <li><a href="#">Cafe <span class="item-numbers">155</span></a></li>
                                <li><a href="#">Pubs <span class="item-numbers">35</span></a></li>
                                <li><a href="#">Food Truck <span class="item-numbers">12</span></a></li>
                                <li><a href="#">Show More <span class="item-numbers">7</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-lg-9">
                    <div class="single-categorie">
                        <div id="owl-carousel-featured" class="owl-carousel categories-list-page">
                            <div class="item">
                                <div class="item-ads-grid icon-blue">
                                    <div class="item-img-grid">
                                        <img alt="" src="images/categories/restaurant/1.png" class="img-responsive img-center">
                                        <div class="item-title">
                                            <a href="{{ route('single') }}">
                                                <h4>There are many variations</h4>
                                            </a>
                                            <h3>$ 64.5000</h3>
                                        </div>
                                    </div>
                                    <div class="item-meta">
                                        <ul>
                                            <li class="item-date"><i class="fa fa-clock-o"></i> Today 10.35 AM</li>
                                            <li class="item-cat"><i class="fa fa-glass"></i> <a href="#">Restaurant</a> , <a
                                                        href="#">Cafe</a></li>
                                            <li class="item-location"><a href="#"><i class="fa fa-map-marker"></i> Buffalo </a>
                                            </li>
                                            <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-ads-grid icon-blue">
                                    <div class="item-img-grid">
                                        <img alt="" src="images/categories/restaurant/2.png" class="img-responsive img-center">
                                        <div class="item-title">
                                            <a href="{{ route('single') }}">
                                                <h4>There are many variations</h4>
                                            </a>
                                            <h3>$ 64.5000</h3>
                                        </div>
                                    </div>
                                    <div class="item-meta">
                                        <ul>
                                            <li class="item-date"><i class="fa fa-clock-o"></i> Today 10.35 AM</li>
                                            <li class="item-cat"><i class="fa fa-glass"></i> <a href="#">Restaurant</a> , <a
                                                        href="#">Cafe</a></li>
                                            <li class="item-location"><a href="#"><i class="fa fa-map-marker"></i> Buffalo </a>
                                            </li>
                                            <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-ads-grid icon-blue">
                                    <div class="item-img-grid">
                                        <img alt="" src="images/categories/restaurant/3.png" class="img-responsive img-center">
                                        <div class="item-title">
                                            <a href="{{ route('single') }}">
                                                <h4>There are many variations</h4>
                                            </a>
                                            <h3>$ 64.5000</h3>
                                        </div>
                                    </div>
                                    <div class="item-meta">
                                        <ul>
                                            <li class="item-date"><i class="fa fa-clock-o"></i> Today 10.35 AM</li>
                                            <li class="item-cat"><i class="fa fa-glass"></i> <a href="#">Restaurant</a> , <a
                                                        href="#">Cafe</a></li>
                                            <li class="item-location"><a href="#"><i class="fa fa-map-marker"></i> Buffalo </a>
                                            </li>
                                            <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-ads-grid icon-blue">
                                    <div class="item-img-grid">
                                        <img alt="" src="images/categories/restaurant/4.png" class="img-responsive img-center">
                                        <div class="item-title">
                                            <a href="{{ route('single') }}">
                                                <h4>There are many variations</h4>
                                            </a>
                                            <h3>$ 64.5000</h3>
                                        </div>
                                    </div>
                                    <div class="item-meta">
                                        <ul>
                                            <li class="item-date"><i class="fa fa-clock-o"></i> Today 10.35 AM</li>
                                            <li class="item-cat"><i class="fa fa-glass"></i> <a href="#">Restaurant</a> , <a
                                                        href="#">Cafe</a></li>
                                            <li class="item-location"><a href="#"><i class="fa fa-map-marker"></i> Buffalo </a>
                                            </li>
                                            <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="Real_Estate" class="row">
                <div class="col-lg-3 col-md-3 col-lg-3">
                    <div class="widget green-widget">
                        <div class="widget-header">
                            <small>98,156 Ads</small>
                            <h1><i class="fa fa-home shortcut-icon icon-green"></i> Real Estate</h1>
                        </div>
                        <div class="widget-body">
                            <ul class="trends">
                                <li><a href="#">For Sale <span class="item-numbers">135</span></a></li>
                                <li><a href="#">For Rent <span class="item-numbers">116</span></a></li>
                                <li><a href="#">To Share <span class="item-numbers">65</span></a></li>
                                <li><a href="#">Land & Estates <span class="item-numbers">47</span></a></li>
                                <li><a href="#">Appartments <span class="item-numbers">23</span></a></li>
                                <li><a href="#">For Sale <span class="item-numbers">135</span></a></li>
                                <li><a href="#">Land & Estates <span class="item-numbers">47</span></a></li>
                                <li><a href="#">Appartments <span class="item-numbers">23</span></a></li>
                                <li><a href="#">Show More <span class="item-numbers">4</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-lg-9">
                    <div class="single-categorie">
                        <div id="owl-carousel-featured" class="owl-carousel categories-list-page">
                            <div class="item">
                                <div class="item-ads-grid icon-green">
                                    <div class="item-img-grid">
                                        <img alt="" src="images/categories/real_estate/1.png" class="img-responsive img-center">
                                        <div class="item-title">
                                            <a href="{{ route('single') }}">
                                                <h4>Lorem Ipsum is simply</h4>
                                            </a>
                                            <h3>$ 64.5000</h3>
                                        </div>
                                    </div>
                                    <div class="item-meta">
                                        <ul>
                                            <li class="item-date"><i class="fa fa-clock-o"></i> Today 02.05 AM</li>
                                            <li class="item-cat"><i class="fa fa-home"></i> <a href="#">Real Estate</a> , <a
                                                        href="#">For Rent</a></li>
                                            <li class="item-location"><a href="#"><i class="fa fa-map-marker"></i> Frederick </a>
                                            </li>
                                            <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-ads-grid icon-green">
                                    <div class="item-img-grid">
                                        <img alt="" src="images/categories/real_estate/2.png" class="img-responsive img-center">
                                        <div class="item-title">
                                            <a href="{{ route('single') }}">
                                                <h4>Lorem Ipsum is simply</h4>
                                            </a>
                                            <h3>$ 64.5000</h3>
                                        </div>
                                    </div>
                                    <div class="item-meta">
                                        <ul>
                                            <li class="item-date"><i class="fa fa-clock-o"></i> Today 02.05 AM</li>
                                            <li class="item-cat"><i class="fa fa-home"></i> <a href="#">Real Estate</a> , <a
                                                        href="#">For Rent</a></li>
                                            <li class="item-location"><a href="#"><i class="fa fa-map-marker"></i> Frederick </a>
                                            </li>
                                            <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-ads-grid icon-green">
                                    <div class="item-img-grid">
                                        <img alt="" src="images/categories/real_estate/3.png" class="img-responsive img-center">
                                        <div class="item-title">
                                            <a href="{{ route('single') }}">
                                                <h4>Lorem Ipsum is simply</h4>
                                            </a>
                                            <h3>$ 64.5000</h3>
                                        </div>
                                    </div>
                                    <div class="item-meta">
                                        <ul>
                                            <li class="item-date"><i class="fa fa-clock-o"></i> Today 02.05 AM</li>
                                            <li class="item-cat"><i class="fa fa-home"></i> <a href="#">Real Estate</a> , <a
                                                        href="#">For Rent</a></li>
                                            <li class="item-location"><a href="#"><i class="fa fa-map-marker"></i> Frederick </a>
                                            </li>
                                            <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-ads-grid icon-green">
                                    <div class="item-img-grid">
                                        <img alt="" src="images/categories/real_estate/4.png" class="img-responsive img-center">
                                        <div class="item-title">
                                            <a href="{{ route('single') }}">
                                                <h4>Lorem Ipsum is simply</h4>
                                            </a>
                                            <h3>$ 64.5000</h3>
                                        </div>
                                    </div>
                                    <div class="item-meta">
                                        <ul>
                                            <li class="item-date"><i class="fa fa-clock-o"></i> Today 02.05 AM</li>
                                            <li class="item-cat"><i class="fa fa-home"></i> <a href="#">Real Estate</a> , <a
                                                        href="#">For Rent</a></li>
                                            <li class="item-location"><a href="#"><i class="fa fa-map-marker"></i> Frederick </a>
                                            </li>
                                            <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="Cars" class="row">
                <div class="col-lg-3 col-md-3 col-lg-3">
                    <div class="widget brown-widget">
                        <div class="widget-header">
                            <small>98,156 Ads</small>
                            <h1><i class="fa fa-car shortcut-icon icon-brown"></i> Cars</h1>
                        </div>
                        <div class="widget-body">
                            <ul class="trends">
                                <li><a href="#">Car Parts <span class="item-numbers">98</span></a></li>
                                <li><a href="#">Cars <span class="item-numbers">65</span></a></li>
                                <li><a href="#">Motobikes <span class="item-numbers">55</span></a></li>
                                <li><a href="#">Wanted <span class="item-numbers">28</span></a></li>
                                <li><a href="#">Rentacar <span class="item-numbers">15</span></a></li>
                                <li><a href="#">Car Parts <span class="item-numbers">98</span></a></li>
                                <li><a href="#">Wanted <span class="item-numbers">28</span></a></li>
                                <li><a href="#">Rentacar <span class="item-numbers">15</span></a></li>
                                <li><a href="#">Show More <span class="item-numbers">12</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-lg-9">
                    <div class="single-categorie">
                        <div id="owl-carousel-featured" class="owl-carousel categories-list-page">
                            <div class="item">
                                <div class="item-ads-grid icon-brown">
                                    <div class="item-img-grid">
                                        <img alt="" src="images/categories/cars/1.png" class="img-responsive img-center">
                                        <div class="item-title">
                                            <a href="{{ route('single') }}">
                                                <h4>It is a long established</h4>
                                            </a>
                                            <h3>$ 64.5000</h3>
                                        </div>
                                    </div>
                                    <div class="item-meta">
                                        <ul>
                                            <li class="item-date"><i class="fa fa-clock-o"></i> Today 03.15 AM</li>
                                            <li class="item-cat"><i class="fa fa-car"></i> <a href="#">Cars</a> , <a href="#">Car
                                                    Parts</a></li>
                                            <li class="item-location"><a href="#"><i class="fa fa-map-marker"></i> Augusta </a>
                                            </li>
                                            <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-ads-grid icon-brown">
                                    <div class="item-img-grid">
                                        <img alt="" src="images/categories/cars/2.png" class="img-responsive img-center">
                                        <div class="item-title">
                                            <a href="{{ route('single') }}">
                                                <h4>It is a long established</h4>
                                            </a>
                                            <h3>$ 64.5000</h3>
                                        </div>
                                    </div>
                                    <div class="item-meta">
                                        <ul>
                                            <li class="item-date"><i class="fa fa-clock-o"></i> Today 03.15 AM</li>
                                            <li class="item-cat"><i class="fa fa-car"></i> <a href="#">Cars</a> , <a href="#">Car
                                                    Parts</a></li>
                                            <li class="item-location"><a href="#"><i class="fa fa-map-marker"></i> Augusta </a>
                                            </li>
                                            <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-ads-grid icon-brown">
                                    <div class="item-img-grid">
                                        <img alt="" src="images/categories/cars/3.png" class="img-responsive img-center">
                                        <div class="item-title">
                                            <a href="{{ route('single') }}">
                                                <h4>It is a long established</h4>
                                            </a>
                                            <h3>$ 64.5000</h3>
                                        </div>
                                    </div>
                                    <div class="item-meta">
                                        <ul>
                                            <li class="item-date"><i class="fa fa-clock-o"></i> Today 03.15 AM</li>
                                            <li class="item-cat"><i class="fa fa-car"></i> <a href="#">Cars</a> , <a href="#">Car
                                                    Parts</a></li>
                                            <li class="item-location"><a href="#"><i class="fa fa-map-marker"></i> Augusta </a>
                                            </li>
                                            <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-ads-grid icon-brown">
                                    <div class="item-img-grid">
                                        <img alt="" src="images/categories/cars/4.png" class="img-responsive img-center">
                                        <div class="item-title">
                                            <a href="{{ route('single') }}">
                                                <h4>It is a long established</h4>
                                            </a>
                                            <h3>$ 64.5000</h3>
                                        </div>
                                    </div>
                                    <div class="item-meta">
                                        <ul>
                                            <li class="item-date"><i class="fa fa-clock-o"></i> Today 03.15 AM</li>
                                            <li class="item-cat"><i class="fa fa-car"></i> <a href="#">Cars</a> , <a href="#">Car
                                                    Parts</a></li>
                                            <li class="item-location"><a href="#"><i class="fa fa-map-marker"></i> Augusta </a>
                                            </li>
                                            <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="Shopping" class="row">
                <div class="col-lg-3 col-md-3 col-lg-3">
                    <div class="widget violet-widget">
                        <div class="widget-header">
                            <small>98,156 Ads</small>
                            <h1><i class="fa fa-shopping-cart shortcut-icon icon-violet"></i> Shopping</h1>
                        </div>
                        <div class="widget-body">
                            <ul class="trends">
                                <li><a href="#">Food <span class="item-numbers">68</span></a></li>
                                <li><a href="#">Wear <span class="item-numbers">44</span></a></li>
                                <li><a href="#">Accessories <span class="item-numbers">23</span></a></li>
                                <li><a href="#">IT & Sofware <span class="item-numbers">19</span></a></li>
                                <li><a href="#">For Kids <span class="item-numbers">5</span></a></li>
                                <li><a href="#">Food <span class="item-numbers">68</span></a></li>
                                <li><a href="#">IT & Sofware <span class="item-numbers">19</span></a></li>
                                <li><a href="#">For Kids <span class="item-numbers">5</span></a></li>
                                <li><a href="#">Show More <span class="item-numbers">3</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-lg-9">
                    <div class="single-categorie">
                        <div id="owl-carousel-featured" class="owl-carousel categories-list-page">
                            <div class="item">
                                <div class="item-ads-grid icon-violet">
                                    <div class="item-img-grid">
                                        <img alt="" src="images/categories/shopping/1.png" class="img-responsive img-center">
                                        <div class="item-title">
                                            <a href="{{ route('single') }}">
                                                <h4>Passage of Lorem Ipsum </h4>
                                            </a>
                                            <h3>$ 64.5000</h3>
                                        </div>
                                    </div>
                                    <div class="item-meta">
                                        <ul>
                                            <li class="item-date"><i class="fa fa-clock-o"></i> Today 11.45 PM</li>
                                            <li class="item-cat"><i class="fa fa-shopping-cart"></i> <a href="#">Shopping</a> , <a
                                                        href="#">Accessories</a></li>
                                            <li class="item-location"><a href="#"><i class="fa fa-map-marker"></i> San Diego </a>
                                            </li>
                                            <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-ads-grid icon-violet">
                                    <div class="item-img-grid">
                                        <img alt="" src="images/categories/shopping/2.png" class="img-responsive img-center">
                                        <div class="item-title">
                                            <a href="{{ route('single') }}">
                                                <h4>Passage of Lorem Ipsum </h4>
                                            </a>
                                            <h3>$ 64.5000</h3>
                                        </div>
                                    </div>
                                    <div class="item-meta">
                                        <ul>
                                            <li class="item-date"><i class="fa fa-clock-o"></i> Today 11.45 PM</li>
                                            <li class="item-cat"><i class="fa fa-shopping-cart"></i> <a href="#">Shopping</a> , <a
                                                        href="#">Accessories</a></li>
                                            <li class="item-location"><a href="#"><i class="fa fa-map-marker"></i> San Diego </a>
                                            </li>
                                            <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-ads-grid icon-violet">
                                    <div class="item-img-grid">
                                        <img alt="" src="images/categories/shopping/3.png" class="img-responsive img-center">
                                        <div class="item-title">
                                            <a href="{{ route('single') }}">
                                                <h4>Passage of Lorem Ipsum </h4>
                                            </a>
                                            <h3>$ 64.5000</h3>
                                        </div>
                                    </div>
                                    <div class="item-meta">
                                        <ul>
                                            <li class="item-date"><i class="fa fa-clock-o"></i> Today 11.45 PM</li>
                                            <li class="item-cat"><i class="fa fa-shopping-cart"></i> <a href="#">Shopping</a> , <a
                                                        href="#">Accessories</a></li>
                                            <li class="item-location"><a href="#"><i class="fa fa-map-marker"></i> San Diego </a>
                                            </li>
                                            <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-ads-grid icon-violet">
                                    <div class="item-img-grid">
                                        <img alt="" src="images/categories/shopping/4.png" class="img-responsive img-center">
                                        <div class="item-title">
                                            <a href="{{ route('single') }}">
                                                <h4>Passage of Lorem Ipsum </h4>
                                            </a>
                                            <h3>$ 64.5000</h3>
                                        </div>
                                    </div>
                                    <div class="item-meta">
                                        <ul>
                                            <li class="item-date"><i class="fa fa-clock-o"></i> Today 11.45 PM</li>
                                            <li class="item-cat"><i class="fa fa-shopping-cart"></i> <a href="#">Shopping</a> , <a
                                                        href="#">Accessories</a></li>
                                            <li class="item-location"><a href="#"><i class="fa fa-map-marker"></i> San Diego </a>
                                            </li>
                                            <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="Job" class="row">
                <div class="col-lg-3 col-md-3 col-lg-3">
                    <div class="widget dark-blue-widget">
                        <div class="widget-header">
                            <small>98,156 Ads</small>
                            <h1><i class="fa fa-briefcase shortcut-icon icon-dark-blue"></i> Job</h1>
                        </div>
                        <div class="widget-body">
                            <ul class="trends">
                                <li><a href="#">Accountancy <span class="item-numbers">78</span></a></li>
                                <li><a href="#">Banking <span class="item-numbers">45</span></a></li>
                                <li><a href="#">Managerment <span class="item-numbers">30</span></a></li>
                                <li><a href="#">Secretarial & PA <span class="item-numbers">28</span></a></li>
                                <li><a href="#">Voluntary Work <span class="item-numbers">16</span></a></li>
                                <li><a href="#">Accountancy <span class="item-numbers">78</span></a></li>
                                <li><a href="#">Secretarial & PA <span class="item-numbers">28</span></a></li>
                                <li><a href="#">Voluntary Work <span class="item-numbers">16</span></a></li>
                                <li><a href="#">Show More <span class="item-numbers">9</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-lg-9">
                    <div class="single-categorie">
                        <div id="owl-carousel-featured" class="owl-carousel categories-list-page">
                            <div class="item">
                                <div class="item-ads-grid icon-dark-blue">
                                    <div class="item-img-grid">
                                        <img alt="" src="images/categories/job/1.png" class="img-responsive img-center">
                                        <div class="item-title">
                                            <a href="{{ route('single') }}">
                                                <h4>Lorem Ipsum is simply</h4>
                                            </a>
                                            <h3>$ 64.5000</h3>
                                        </div>
                                    </div>
                                    <div class="item-meta">
                                        <ul>
                                            <li class="item-date"><i class="fa fa-clock-o"></i> Today 09.45 PM</li>
                                            <li class="item-cat"><i class="fa fa-briefcase"></i> <a href="#">Job</a> , <a
                                                        href="#">Banking</a></li>
                                            <li class="item-location"><a href="#"><i class="fa fa-map-marker"></i> Juneau</a></li>
                                            <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-ads-grid icon-dark-blue">
                                    <div class="item-img-grid">
                                        <img alt="" src="images/categories/job/2.png" class="img-responsive img-center">
                                        <div class="item-title">
                                            <a href="{{ route('single') }}">
                                                <h4>Lorem Ipsum is simply</h4>
                                            </a>
                                            <h3>$ 64.5000</h3>
                                        </div>
                                    </div>
                                    <div class="item-meta">
                                        <ul>
                                            <li class="item-date"><i class="fa fa-clock-o"></i> Today 09.45 PM</li>
                                            <li class="item-cat"><i class="fa fa-briefcase"></i> <a href="#">Job</a> , <a
                                                        href="#">Banking</a></li>
                                            <li class="item-location"><a href="#"><i class="fa fa-map-marker"></i> Juneau</a></li>
                                            <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-ads-grid icon-dark-blue">
                                    <div class="item-img-grid">
                                        <img alt="" src="images/categories/job/3.png" class="img-responsive img-center">
                                        <div class="item-title">
                                            <a href="{{ route('single') }}">
                                                <h4>Lorem Ipsum is simply</h4>
                                            </a>
                                            <h3>$ 64.5000</h3>
                                        </div>
                                    </div>
                                    <div class="item-meta">
                                        <ul>
                                            <li class="item-date"><i class="fa fa-clock-o"></i> Today 09.45 PM</li>
                                            <li class="item-cat"><i class="fa fa-briefcase"></i> <a href="#">Job</a> , <a
                                                        href="#">Banking</a></li>
                                            <li class="item-location"><a href="#"><i class="fa fa-map-marker"></i> Juneau</a></li>
                                            <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-ads-grid icon-dark-blue">
                                    <div class="item-img-grid">
                                        <img alt="" src="images/categories/job/4.png" class="img-responsive img-center">
                                        <div class="item-title">
                                            <a href="{{ route('single') }}">
                                                <h4>Lorem Ipsum is simply</h4>
                                            </a>
                                            <h3>$ 64.5000</h3>
                                        </div>
                                    </div>
                                    <div class="item-meta">
                                        <ul>
                                            <li class="item-date"><i class="fa fa-clock-o"></i> Today 09.45 PM</li>
                                            <li class="item-cat"><i class="fa fa-briefcase"></i> <a href="#">Job</a> , <a
                                                        href="#">Banking</a></li>
                                            <li class="item-location"><a href="#"><i class="fa fa-map-marker"></i> Juneau</a></li>
                                            <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="Hotels" class="row">
                <div class="col-lg-3 col-md-3 col-lg-3">
                    <div class="widget orange-widget">
                        <div class="widget-header">
                            <small>98,156 Ads</small>
                            <h1><i class="fa fa-building-o shortcut-icon icon-orange"></i> Hotels</h1>
                        </div>
                        <div class="widget-body">
                            <ul class="trends">
                                <li><a href="#">Artists <span class="item-numbers">95</span></a></li>
                                <li><a href="#">Events & Nightlife <span class="item-numbers">86</span></a></li>
                                <li><a href="#">Hotel Stuff <span class="item-numbers">60</span></a></li>
                                <li><a href="#">Classes <span class="item-numbers">30</span></a></li>
                                <li><a href="#">Hostel <span class="item-numbers">22</span></a></li>
                                <li><a href="#">Artists <span class="item-numbers">95</span></a></li>
                                <li><a href="#">Classes <span class="item-numbers">30</span></a></li>
                                <li><a href="#">Hostel <span class="item-numbers">22</span></a></li>
                                <li><a href="#">Show More <span class="item-numbers">19</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-lg-9">
                    <div class="single-categorie">
                        <div id="owl-carousel-featured" class="owl-carousel categories-list-page">
                            <div class="item">
                                <div class="item-ads-grid icon-orange">
                                    <div class="item-img-grid">
                                        <img alt="" src="images/categories/hotels/1.png" class="img-responsive img-center">
                                        <div class="item-title">
                                            <a href="{{ route('single') }}">
                                                <h4>Passage of Lorem Ipsum</h4>
                                            </a>
                                            <h3>$ 64.5000</h3>
                                        </div>
                                    </div>
                                    <div class="item-meta">
                                        <ul>
                                            <li class="item-date"><i class="fa fa-clock-o"></i> Today 02.05 AM</li>
                                            <li class="item-cat"><i class="fa fa-building-o"></i> <a href="#">Hotels</a> , <a
                                                        href="#">Events & Nightlife</a></li>
                                            <li class="item-location"><a href="#"><i class="fa fa-map-marker"></i> Fairbanks</a>
                                            </li>
                                            <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-ads-grid icon-orange">
                                    <div class="item-img-grid">
                                        <img alt="" src="images/categories/hotels/2.png" class="img-responsive img-center">
                                        <div class="item-title">
                                            <a href="{{ route('single') }}">
                                                <h4>Passage of Lorem Ipsum</h4>
                                            </a>
                                            <h3>$ 64.5000</h3>
                                        </div>
                                    </div>
                                    <div class="item-meta">
                                        <ul>
                                            <li class="item-date"><i class="fa fa-clock-o"></i> Today 02.05 AM</li>
                                            <li class="item-cat"><i class="fa fa-building-o"></i> <a href="#">Hotels</a> , <a
                                                        href="#">Events & Nightlife</a></li>
                                            <li class="item-location"><a href="#"><i class="fa fa-map-marker"></i> Fairbanks</a>
                                            </li>
                                            <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-ads-grid icon-orange">
                                    <div class="item-img-grid">
                                        <img alt="" src="images/categories/hotels/3.png" class="img-responsive img-center">
                                        <div class="item-title">
                                            <a href="{{ route('single') }}">
                                                <h4>Passage of Lorem Ipsum</h4>
                                            </a>
                                            <h3>$ 64.5000</h3>
                                        </div>
                                    </div>
                                    <div class="item-meta">
                                        <ul>
                                            <li class="item-date"><i class="fa fa-clock-o"></i> Today 02.05 AM</li>
                                            <li class="item-cat"><i class="fa fa-building-o"></i> <a href="#">Hotels</a> , <a
                                                        href="#">Events & Nightlife</a></li>
                                            <li class="item-location"><a href="#"><i class="fa fa-map-marker"></i> Fairbanks</a>
                                            </li>
                                            <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-ads-grid icon-orange">
                                    <div class="item-img-grid">
                                        <img alt="" src="images/categories/hotels/4.png" class="img-responsive img-center">
                                        <div class="item-title">
                                            <a href="{{ route('single') }}">
                                                <h4>Passage of Lorem Ipsum</h4>
                                            </a>
                                            <h3>$ 64.5000</h3>
                                        </div>
                                    </div>
                                    <div class="item-meta">
                                        <ul>
                                            <li class="item-date"><i class="fa fa-clock-o"></i> Today 02.05 AM</li>
                                            <li class="item-cat"><i class="fa fa-building-o"></i> <a href="#">Hotels</a> , <a
                                                        href="#">Events & Nightlife</a></li>
                                            <li class="item-location"><a href="#"><i class="fa fa-map-marker"></i> Fairbanks</a>
                                            </li>
                                            <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="Services" class="row">
                <div class="col-lg-3 col-md-3 col-lg-3">
                    <div class="widget light-blue-widget">
                        <div class="widget-header">
                            <small>98,156 Ads</small>
                            <h1><i class="fa fa-star shortcut-icon icon-light-blue"></i> Services</h1>
                        </div>
                        <div class="widget-body">
                            <ul class="trends">
                                <li><a href="#">Computers <span class="item-numbers">55</span></a></li>
                                <li><a href="#">Clothing <span class="item-numbers">35</span></a></li>
                                <li><a href="#">Childcare <span class="item-numbers">31</span></a></li>
                                <li><a href="#">Business <span class="item-numbers">29</span></a></li>
                                <li><a href="#">Cleaning <span class="item-numbers">18</span></a></li>
                                <li><a href="#">Computers <span class="item-numbers">55</span></a></li>
                                <li><a href="#">Business <span class="item-numbers">29</span></a></li>
                                <li><a href="#">Cleaning <span class="item-numbers">18</span></a></li>
                                <li><a href="#">Show More <span class="item-numbers">8</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-lg-9">
                    <div class="single-categorie">
                        <div id="owl-carousel-featured" class="owl-carousel categories-list-page">
                            <div class="item">
                                <div class="item-ads-grid icon-light-blue">
                                    <div class="item-img-grid">
                                        <img alt="" src="images/categories/services/1.png" class="img-responsive img-center">
                                        <div class="item-title">
                                            <a href="{{ route('single') }}">
                                                <h4>There are many variations</h4>
                                            </a>
                                            <h3>$ 64.5000</h3>
                                        </div>
                                    </div>
                                    <div class="item-meta">
                                        <ul>
                                            <li class="item-date"><i class="fa fa-clock-o"></i> Today 12.09 PM</li>
                                            <li class="item-cat"><i class="fa fa-star"></i> <a href="#">Services</a> , <a
                                                        href="#">Computers</a></li>
                                            <li class="item-location"><a href="#"><i class="fa fa-map-marker"></i> Fort Smith </a>
                                            </li>
                                            <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-ads-grid icon-light-blue">
                                    <div class="item-img-grid">
                                        <img alt="" src="images/categories/services/2.png" class="img-responsive img-center">
                                        <div class="item-title">
                                            <a href="{{ route('single') }}">
                                                <h4>There are many variations</h4>
                                            </a>
                                            <h3>$ 64.5000</h3>
                                        </div>
                                    </div>
                                    <div class="item-meta">
                                        <ul>
                                            <li class="item-date"><i class="fa fa-clock-o"></i> Today 12.09 PM</li>
                                            <li class="item-cat"><i class="fa fa-star"></i> <a href="#">Services</a> , <a
                                                        href="#">Computers</a></li>
                                            <li class="item-location"><a href="#"><i class="fa fa-map-marker"></i> Fort Smith </a>
                                            </li>
                                            <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-ads-grid icon-light-blue">
                                    <div class="item-img-grid">
                                        <img alt="" src="images/categories/services/3.png" class="img-responsive img-center">
                                        <div class="item-title">
                                            <a href="{{ route('single') }}">
                                                <h4>There are many variations</h4>
                                            </a>
                                            <h3>$ 64.5000</h3>
                                        </div>
                                    </div>
                                    <div class="item-meta">
                                        <ul>
                                            <li class="item-date"><i class="fa fa-clock-o"></i> Today 12.09 PM</li>
                                            <li class="item-cat"><i class="fa fa-star"></i> <a href="#">Services</a> , <a
                                                        href="#">Computers</a></li>
                                            <li class="item-location"><a href="#"><i class="fa fa-map-marker"></i> Fort Smith </a>
                                            </li>
                                            <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-ads-grid icon-light-blue">
                                    <div class="item-badge-grid featured-ads">
                                        <a href="#">HOT</a>
                                    </div>
                                    <div class="item-img-grid">
                                        <img alt="" src="images/categories/services/4.png" class="img-responsive img-center">
                                        <div class="item-title">
                                            <a href="{{ route('single') }}">
                                                <h4>There are many variations</h4>
                                            </a>
                                            <h3>$ 64.5000</h3>
                                        </div>
                                    </div>
                                    <div class="item-meta">
                                        <ul>
                                            <li class="item-date"><i class="fa fa-clock-o"></i> Today 12.09 PM</li>
                                            <li class="item-cat"><i class="fa fa-star"></i> <a href="#">Services</a> , <a
                                                        href="#">Computers</a></li>
                                            <li class="item-location"><a href="#"><i class="fa fa-map-marker"></i> Fort Smith </a>
                                            </li>
                                            <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="Pets" class="row">
                <div class="col-lg-3 col-md-3 col-lg-3">
                    <div class="widget light-green-widget margin-bottom-none">
                        <div class="widget-header">
                            <small>98,156 Ads</small>
                            <h1><i class="fa fa-paw shortcut-icon icon-light-green"></i> Pets</h1>
                        </div>
                        <div class="widget-body">
                            <ul class="trends">
                                <li><a href="#">Cats <span class="item-numbers">66</span></a></li>
                                <li><a href="#">Dogs <span class="item-numbers">54</span></a></li>
                                <li><a href="#">Birds <span class="item-numbers">34</span></a></li>
                                <li><a href="#">Wanted <span class="item-numbers">12</span></a></li>
                                <li><a href="#">Pets for Sale <span class="item-numbers">6</span></a></li>
                                <li><a href="#">Cats <span class="item-numbers">66</span></a></li>
                                <li><a href="#">Wanted <span class="item-numbers">12</span></a></li>
                                <li><a href="#">Pets for Sale <span class="item-numbers">6</span></a></li>
                                <li><a href="#">Show More <span class="item-numbers">1</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-lg-9">
                    <div class="single-categorie">
                        <div id="owl-carousel-featured" class="owl-carousel categories-list-page">
                            <div class="item">
                                <div class="item-ads-grid icon-light-green">
                                    <div class="item-badge-grid featured-ads">
                                        <a href="#">HOT</a>
                                    </div>
                                    <div class="item-img-grid">
                                        <img alt="" src="images/categories/pets/1.png" class="img-responsive img-center">
                                        <div class="item-title">
                                            <a href="{{ route('single') }}">
                                                <h4>Lorem Ipsum is simply</h4>
                                            </a>
                                            <h3>$ 64.5000</h3>
                                        </div>
                                    </div>
                                    <div class="item-meta">
                                        <ul>
                                            <li class="item-date"><i class="fa fa-clock-o"></i> Today 10.35 AM</li>
                                            <li class="item-cat"><i class="fa fa-paw"></i> <a href="#">Pets</a> , <a
                                                        href="#">Dogs</a></li>
                                            <li class="item-location"><a href="#"><i class="fa fa-map-marker"></i> Manchester</a>
                                            </li>
                                            <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-ads-grid icon-light-green">
                                    <div class="item-img-grid">
                                        <img alt="" src="images/categories/pets/2.png" class="img-responsive img-center">
                                        <div class="item-title">
                                            <a href="{{ route('single') }}">
                                                <h4>Lorem Ipsum is simply</h4>
                                            </a>
                                            <h3>$ 64.5000</h3>
                                        </div>
                                    </div>
                                    <div class="item-meta">
                                        <ul>
                                            <li class="item-date"><i class="fa fa-clock-o"></i> Today 10.35 AM</li>
                                            <li class="item-cat"><i class="fa fa-paw"></i> <a href="#">Pets</a> , <a
                                                        href="#">Dogs</a></li>
                                            <li class="item-location"><a href="#"><i class="fa fa-map-marker"></i> Manchester</a>
                                            </li>
                                            <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-ads-grid icon-light-green">
                                    <div class="item-img-grid">
                                        <img alt="" src="images/categories/pets/3.png" class="img-responsive img-center">
                                        <div class="item-title">
                                            <a href="{{ route('single') }}">
                                                <h4>Lorem Ipsum is simply</h4>
                                            </a>
                                            <h3>$ 64.5000</h3>
                                        </div>
                                    </div>
                                    <div class="item-meta">
                                        <ul>
                                            <li class="item-date"><i class="fa fa-clock-o"></i> Today 10.35 AM</li>
                                            <li class="item-cat"><i class="fa fa-paw"></i> <a href="#">Pets</a> , <a
                                                        href="#">Dogs</a></li>
                                            <li class="item-location"><a href="#"><i class="fa fa-map-marker"></i> Manchester</a>
                                            </li>
                                            <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-ads-grid icon-light-green">
                                    <div class="item-badge-grid featured-ads">
                                        <a href="#">HOT</a>
                                    </div>
                                    <div class="item-img-grid">
                                        <img alt="" src="images/categories/pets/4.png" class="img-responsive img-center">
                                        <div class="item-title">
                                            <a href="{{ route('single') }}">
                                                <h4>Lorem Ipsum is simply</h4>
                                            </a>
                                            <h3>$ 64.5000</h3>
                                        </div>
                                    </div>
                                    <div class="item-meta">
                                        <ul>
                                            <li class="item-date"><i class="fa fa-clock-o"></i> Today 10.35 AM</li>
                                            <li class="item-cat"><i class="fa fa-paw"></i> <a href="#">Pets</a> , <a
                                                        href="#">Dogs</a></li>
                                            <li class="item-location"><a href="#"><i class="fa fa-map-marker"></i> Manchester</a>
                                            </li>
                                            <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Categories List Page -->
@endsection
