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
                                <li>Ad Alerts</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Breadcumb -->
@endsection

@section('my-alerts')
    <!-- My Alerts -->
    <section class="my-alerts">
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
                            <h1>My Alerts</h1>
                        </div>
                        <div class="widget-body">
                            <h3>What Are Ad Alerts?</h3>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                                Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero
                                sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
                                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                                Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero
                                sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                            <p>&nbsp;</p>
                            <h3>How Do I Set An Ad Alert?</h3>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                                Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero
                                sit amet quam egestas semper. Aenean ultricies mi vitae est.</p>
                            <p>&nbsp;</p>
                            <form>
                                <div class="form-group row d-flex align-items-center">
                                    <label class="col-sm-3 control-label">Email Address <span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <input class="form-control border-form" type="email" value="" placeholder="example@gmail.com">
                                    </div>
                                </div>
                                <div class="form-group row d-flex align-items-center">
                                    <label class="col-sm-3 control-label">Frequency <span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <div class="radio radio-info radio-inline">
                                            <input type="radio" checked="" name="radioInline" value="option1" id="inlineRadio1">
                                            <label for="inlineRadio1"> Once a day </label>
                                        </div>
                                        <div class="radio radio-info radio-inline">
                                            <input type="radio" name="radioInline" value="option1" id="inlineRadio2">
                                            <label for="inlineRadio2"> Once a week </label>
                                        </div>
                                        <div class="radio radio-info radio-inline">
                                            <input type="radio" name="radioInline" value="option1" id="inlineRadio3">
                                            <label for="inlineRadio3"> Once a month </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row d-flex align-items-center">
                                    <label class="col-sm-3 control-label">Pick a Category <span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <select class="form-control border-form">
                                            <option selected="">All Category</option>
                                            <option>Hand Phone</option>
                                            <option>Motorcycle</option>
                                            <option>Properti</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row text-right">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success btn-sm" type="submit"><i class="fa fa-save"></i> Create Alert</button>
                                        <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-close"></i> Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Settings -->
@endsection
