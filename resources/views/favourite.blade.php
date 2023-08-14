@extends('app')

@section('title', 'Car things - Categories')

@section('Breadcumb')
    <!-- Breadcumb -->
    <section class="profile-breadcumb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-left">
                    <div class="breadcumb_section">
                        <div class="page_pagination">
                            <ul>
                                <li><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                <li>My Account</li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                <li>Favourite Ads</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Breadcumb -->
@endsection

@section('favourite-ads')
    <!-- Favourite Ads -->
    <section class="favourite-ads">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="widget profile-widget margin-bottom-none">
                        <div class="widget-body">
                            <div class="avatar">
                                <a class="btn-icon" title="" data-placement="left" data-toggle="tooltip" href="#"
                                   data-original-title="Edit">
                                    <i class="fa fa-camera"></i>
                                </a>
                                <img class="profile-dp" alt="User Image" src="images/user.jpg">
                            </div>
                            <div class="profile-info">
                                <h2 class="seller-name">John Doe</h2>
                                <p class="seller-detail"> Joined : <strong>21 June 2020</strong></p>
                            </div>
                            <div class="list-group">
                                <a class="list-group-item" href="{{ route('my-ads') }}">
                                    <span class="label label-info">15</span>
                                    <i class="fa fa-fw fa-pencil"></i> My Ads
                                </a>
                                <a class="list-group-item" href="{{ route('favourite') }}">
                                    <span class="label label-success">10</span>
                                    <i class="fa fa-fw fa-heart"></i> Favourite Ads
                                </a>
                                <a class="list-group-item" href="{{ route('ad-alerts') }}">
                                    <i class="fa fa-fw fa-clock-o"></i> Ad Alerts
                                </a>
                                <a class="list-group-item" href="{{ route('settings') }}">
                                    <i class="fa fa-fw fa-gear"></i> Settings
                                </a>
                                <a class="list-group-item" href="{{ route('login') }}">
                                    <i class="fa fa-fw fa-power-off"></i> Log Out</a>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="widget my-profile margin-bottom-none">
                        <div class="widget-header">
                            <h1>Favourite Ads</h1>
                        </div>
                        <div class="widget-body">
                            <table class="table table-design">
                                <tbody>
                                <tr>
                                    <td><img src="images/categories/real_estate/1.png" class="thumb-img img-responsive"
                                             alt=""></td>
                                    <td>
                                        <div class="my-item-title"><a target="_blank" href="{{ route('single') }}"><strong>Lorem Ipsum is
                                                    simply</strong></a></div>
                                        <div class="item-meta">
                                            <ul>
                                                <li class="item-date"><i class="fa fa-clock-o"></i> Today 12.35 am</li>
                                                <li class="item-location"><a href="#"><i class="fa fa-map-marker"></i>
                                                        Manchester</a></li>
                                                <li class="item-type"><i class="fa fa-bookmark"></i> Used</li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td><strong>$50</strong></td>
                                    <td>
                                        <div class="action">
                                            <a class="btn btn-danger btn-sm" herf="#">unfaourite</a>
                                            <a class="btn btn-info btn-sm" herf="#">view ad</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="images/categories/cars/4.png" class="thumb-img img-responsive" alt=""></td>
                                    <td>
                                        <div class="my-item-title">
                                            <a target="_blank" href="{{ route('single') }}"><strong>Lorem Ipsum is simply</strong></a>
                                        </div>
                                        <div class="item-meta">
                                            <ul>
                                                <li class="item-date"><i class="fa fa-clock-o"></i> Today 10.35 am</li>
                                                <li class="item-location"><a href="#"><i class="fa fa-map-marker"></i>
                                                        Manchester</a></li>
                                                <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td><strong>$50</strong></td>
                                    <td>
                                        <div class="action">
                                            <a class="btn btn-danger btn-sm" herf="#">unfaourite</a>
                                            <a class="btn btn-info btn-sm" herf="#">view ad</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="images/categories/hotels/1.png" class="thumb-img img-responsive" alt="">
                                    </td>
                                    <td>
                                        <div class="my-item-title"><a target="_blank" href="{{ route('single') }}"><strong>Lorem Ipsum is
                                                    simply</strong></a></div>
                                        <div class="item-meta">
                                            <ul>
                                                <li class="item-date"><i class="fa fa-clock-o"></i> Today 10.35 am</li>
                                                <li class="item-location"><a href="#"><i class="fa fa-map-marker"></i>
                                                        Manchester</a></li>
                                                <li class="item-type"><i class="fa fa-bookmark"></i> Used</li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td><strong>$50</strong></td>
                                    <td>
                                        <div class="action">
                                            <a class="btn btn-danger btn-sm" herf="#">unfaourite</a>
                                            <a class="btn btn-info btn-sm" herf="#">view ad</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="images/categories/restaurant/4.png" class="thumb-img img-responsive" alt="">
                                    </td>
                                    <td>
                                        <div class="my-item-title">
                                            <a target="_blank" href="{{ route('single') }}"><strong>Lorem Ipsum is simply</strong></a>
                                        </div>
                                        <div class="item-meta">
                                            <ul>
                                                <li class="item-date"><i class="fa fa-clock-o"></i> Today 10.35 am</li>
                                                <li class="item-location"><a href="#"><i class="fa fa-map-marker"></i>
                                                        Manchester</a></li>
                                                <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td><strong>$50</strong></td>
                                    <td>
                                        <div class="action">
                                            <a class="btn btn-danger btn-sm" herf="#">unfaourite</a>
                                            <a class="btn btn-info btn-sm" herf="#">view ad</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="images/categories/real_estate/1.png" class="thumb-img img-responsive"
                                             alt=""></td>
                                    <td>
                                        <div class="my-item-title"><a target="_blank" href="{{ route('single') }}"><strong>Lorem Ipsum is
                                                    simply</strong></a></div>
                                        <div class="item-meta">
                                            <ul>
                                                <li class="item-date"><i class="fa fa-clock-o"></i> Today 12.35 am</li>
                                                <li class="item-location"><a href="#"><i class="fa fa-map-marker"></i>
                                                        Manchester</a></li>
                                                <li class="item-type"><i class="fa fa-bookmark"></i> Used</li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td><strong>$50</strong></td>
                                    <td>
                                        <div class="action">
                                            <a class="btn btn-danger btn-sm" herf="#">unfaourite</a>
                                            <a class="btn btn-info btn-sm" herf="#">view ad</a>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">
                                <ul class="pagination pagination-sm">
                                    <li class="disabled"><a href="#">«</a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">»</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Favourite Ads -->
@endsection
