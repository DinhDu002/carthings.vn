@extends('app')

@section('title', 'Car things - Category grid')

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
                            <select class="form-control input-lg search-form">
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
                            <select class="form-control input-lg search-form">
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
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Categories Page Search-->
@endsection

@section('category-grid')
    <!-- Category Grid -->
    <section class="category-grid">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="listing-actions clearfix row">
                        <div class="tags col-md-6 text-left">
                            <span>Car Parts <a href="#"><i class="fa fa-close"></i></a></span>
                            <span>Cars <a href="#"><i class="fa fa-close"></i></a></span>
                            <span>Clear All <a href="#"><i class="fa fa-close"></i></a></span>
                        </div>
                        <ul class="listing-actions-nav col-md-6 text-right">
{{--                            <li><a class="layout-action" title="" data-placement="top" data-toggle="tooltip" href="{{ route('category-list') }}" data-original-title="List layout"><i class="fa fa-bars"></i></a></li>--}}
{{--                            <li><a class="layout-action active" title="" data-placement="top" data-toggle="tooltip" href="{{ route('category-grid') }}" data-original-title="Grid layout"><i class="fa fa-th"></i></a></li>--}}
                            <li class="dropdown">
                                <a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                            class="fa fa-filter"></i> Recently Published <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Price Low to High</a></li>
                                    <li><a href="#">Price High to Low</a></li>
                                    <li><a href="#">Price High to Low</a></li>
                                    <li><a href="#">Recently Published</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                            class="fa fa-filter"></i> All Type <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">New</a></li>
                                    <li><a href="#">Used</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-lg-3">
                    <div class="listing-filters">
                        <div class="widget listing-filter-block filter-categories">
                            <div class="widget-header">
                                <h1>Categories</h1>
                            </div>
                            <div class="widget-body">
                                <ul class="trends">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-glass shortcut-icon icon-blue"></i>
                                            <p>Restaurant <small>5,56 Ads</small></p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-home shortcut-icon icon-green"></i>
                                            <p>Real Estate <small>9,156 Ads</small></p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-car shortcut-icon icon-brown"></i>
                                            <p>Cars <small>6,16 Ads</small></p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-shopping-cart shortcut-icon icon-violet"></i>
                                            <p>Shopping <small>98,156 Ads</small></p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-briefcase shortcut-icon icon-dark-blue"></i>
                                            <p>Job <small>9,16 Ads</small></p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-building-o shortcut-icon icon-orange"></i>
                                            <p>Hotels <small>6,56 Ads</small></p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-star shortcut-icon icon-light-blue"></i>
                                            <p>Services <small>2,156 Ads</small></p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-paw shortcut-icon icon-light-green"></i>
                                            <p>Pets <small>9,156 Ads</small></p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget listing-filter-block">
                            <div class="widget-header">
                                <h1>Cars</h1>
                            </div>
                            <div class="widget-body">
                                <ul class="trends">
                                    <li>
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox1" type="checkbox">
                                            <label for="checkbox1">
                                                Car Parts
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox2" type="checkbox" checked="">
                                            <label for="checkbox2">
                                                Cars
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox3" type="checkbox">
                                            <label for="checkbox3">
                                                Motobikes
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox4" type="checkbox">
                                            <label for="checkbox4">
                                                Wanted
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox5" type="checkbox" checked="">
                                            <label for="checkbox5">
                                                Rentacar
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox3" type="checkbox">
                                            <label for="checkbox3">
                                                Motobikes
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget listing-filter-block">
                            <div class="widget-header">
                                <h1>Condition </h1>
                            </div>
                            <div class="widget-body">
                                <ul class="trends">
                                    <li>
                                        <div class="radio radio-primary radio-inline">
                                            <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                                            <label for="inlineRadio1"> Brand New </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio radio-primary radio-inline">
                                            <input type="radio" id="inlineRadio2" value="option1" name="radioInline" checked="">
                                            <label for="inlineRadio2"> Used </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget listing-filter-block">
                            <div class="widget-header">
                                <h1>Price Range</h1>
                            </div>
                            <div class="widget-body">
                                <div class="range-widget">
                                    <div class="form-group">
                                        <div class="range-inputs row">
                                            <div class="col-md-6"><input class="form-control border-form" type="text"
                                                                         placeholder="From"></div>
                                            <div class="col-md-6"><input class="form-control border-form" type="text"
                                                                         placeholder="To"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-search"></i>
                                            Search</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget listing-filter-block margin-bottom-none">
                            <div class="widget-header">
                                <h1>Trending Ads </h1>
                            </div>
                            <div class="widget-body">
                                <div class="similar-ads">
                                    <a href="{{ route('single') }}">
                                        <div class="similar-ad-left">
                                            <img class="img-responsive img-center" src="images/categories/restaurant/1.png" alt="">
                                        </div>
                                        <div class="similar-ad-right">
                                            <h4>Duis autem vel eum iriure do hen...</h4>
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
                                            <h4>Duis autem vel eum iriure do hen...</h4>
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
                                            <h4>Duis autem vel eum iriure do hen...</h4>
                                            <p><i class="fa fa-dollar"></i> 450 - <i class="fa fa-map-marker"></i> Buffalo </p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-lg-9">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="item">
                                <div class="item-ads-grid icon-orange">
                                    <div class="item-badge-grid featured-ads">
                                        <a href="#">HOT</a>
                                    </div>
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
                                            <li class="item-cat"><i class="fa fa-building-o"></i> <a
                                                        href="{{ route('categories') }}">Hotels</a> , <a href="{{ route('categories') }}">Events &
                                                    Nightlife</a></li>
                                            <li class="item-location"><a href="{{ route('categories') }}"><i class="fa fa-map-marker"></i>
                                                    Fairbanks</a></li>
                                            <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-ads-grid icon-blue">
                                    <div class="item-badge-grid featured-ads">
                                        <a href="#">HOT</a>
                                    </div>
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
                                            <li class="item-cat"><i class="fa fa-glass"></i> <a
                                                        href="{{ route('categories') }}">Restaurant</a> , <a href="{{ route('categories') }}">Cafe</a></li>
                                            <li class="item-location"><a href="{{ route('categories') }}"><i class="fa fa-map-marker"></i>
                                                    Buffalo </a></li>
                                            <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-ads-grid icon-green">
                                    <div class="item-badge-grid hot-ads">
                                        <a href="#">HOT</a>
                                    </div>
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
                                            <li class="item-cat"><i class="fa fa-home"></i> <a href="{{ route('categories') }}">Real
                                                    Estate</a> , <a href="{{ route('categories') }}">For Rent</a></li>
                                            <li class="item-location"><a href="{{ route('categories') }}"><i class="fa fa-map-marker"></i>
                                                    Frederick </a></li>
                                            <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-ads-grid icon-brown">
                                    <div class="item-badge-grid premium-ads">
                                        <a href="#">HOT</a>
                                    </div>
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
                                            <li class="item-cat"><i class="fa fa-car"></i> <a href="{{ route('categories') }}">Cars</a> , <a
                                                        href="{{ route('categories') }}">Car Parts</a></li>
                                            <li class="item-location"><a href="{{ route('categories') }}"><i class="fa fa-map-marker"></i>
                                                    Augusta </a></li>
                                            <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="item">
                                <div class="item-ads-grid icon-violet">
                                    <div class="item-badge-grid btn-primary">
                                        <a href="#">Premium Ad</a>
                                    </div>
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
                                            <li class="item-cat"><i class="fa fa-shopping-cart"></i> <a
                                                        href="{{ route('categories') }}">Shopping</a> , <a href="{{ route('categories') }}">Accessories</a>
                                            </li>
                                            <li class="item-location"><a href="{{ route('categories') }}"><i class="fa fa-map-marker"></i>
                                                    San Diego </a></li>
                                            <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-ads-grid icon-dark-blue">
                                    <div class="item-badge-grid featured-ads">
                                        <a href="#">HOT</a>
                                    </div>
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
                                            <li class="item-cat"><i class="fa fa-briefcase"></i> <a href="{{ route('categories') }}">Job</a>
                                                , <a href="{{ route('categories') }}">Banking</a></li>
                                            <li class="item-location"><a href="{{ route('categories') }}"><i class="fa fa-map-marker"></i>
                                                    Juneau</a></li>
                                            <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-ads-grid icon-orange">
                                    <div class="item-badge-grid featured-ads">
                                        <a href="#">HOT</a>
                                    </div>
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
                                            <li class="item-cat"><i class="fa fa-building-o"></i> <a
                                                        href="{{ route('categories') }}">Hotels</a> , <a href="{{ route('categories') }}">Events &
                                                    Nightlife</a></li>
                                            <li class="item-location"><a href="{{ route('categories') }}"><i class="fa fa-map-marker"></i>
                                                    Fairbanks</a></li>
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
                                            <li class="item-cat"><i class="fa fa-bars"></i> <a href="{{ route('categories') }}">Pets</a> ,
                                                <a href="{{ route('categories') }}">Dogs</a></li>
                                            <li class="item-location"><a href="{{ route('categories') }}"><i class="fa fa-map-marker"></i>
                                                    Manchester</a></li>
                                            <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="item">
                                <div class="item-ads-grid icon-orange">
                                    <div class="item-badge-grid featured-ads">
                                        <a href="#">HOT</a>
                                    </div>
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
                                            <li class="item-cat"><i class="fa fa-building-o"></i> <a
                                                        href="{{ route('categories') }}">Hotels</a> , <a href="{{ route('categories') }}">Events &
                                                    Nightlife</a></li>
                                            <li class="item-location"><a href="{{ route('categories') }}"><i class="fa fa-map-marker"></i>
                                                    Fairbanks</a></li>
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
                                            <li class="item-cat"><i class="fa fa-star"></i> <a href="{{ route('categories') }}">Services</a>
                                                , <a href="{{ route('categories') }}">Computers</a></li>
                                            <li class="item-location"><a href="{{ route('categories') }}"><i class="fa fa-map-marker"></i>
                                                    Fort Smith </a></li>
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
                                            <li class="item-cat"><i class="fa fa-bars"></i> <a href="{{ route('categories') }}">Pets</a> ,
                                                <a href="{{ route('categories') }}">Dogs</a></li>
                                            <li class="item-location"><a href="{{ route('categories') }}"><i class="fa fa-map-marker"></i>
                                                    Manchester</a></li>
                                            <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
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
                                            <li class="item-cat"><i class="fa fa-glass"></i> <a
                                                        href="{{ route('categories') }}">Restaurant</a> , <a href="{{ route('categories') }}">Cafe</a></li>
                                            <li class="item-location"><a href="{{ route('categories') }}"><i class="fa fa-map-marker"></i>
                                                    Buffalo </a></li>
                                            <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a class="btn btn-primary btn-load-more btn-lg" href="#"> LOAD MORE ADS... </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Category Grid -->
@endsection
