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
                                <li>Profile Settings</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Breadcumb -->
@endsection

@section('settings')
    <!-- Settings -->
    <section class="settings">
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
                    <a href="{{ route('close-account') }}" class="btn btn-danger btn-block"><i class="fa fa-trash"></i> Delete
                        Account</a>
                </div>
                <div class="col-md-6">
                    <div class="widget my-profile margin-bottom-none">
                        <div class="widget-header">
                            <h1>My Account</h1>
                        </div>
                        <div class="widget-body">
                            <form>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">Username <span class="required">*</span></label>
                                            <input class="form-control border-form" type="text" value="John Doe"
                                                   placeholder="John Doe" disabled="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">Email Address <span class="required">*</span></label>
                                            <input class="form-control border-form" type="email" value="example@gmail.com"
                                                   placeholder="example@gmail.com" disabled="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">First Name <span class="required">*</span></label>
                                            <input class="form-control border-form" type="text" value=""
                                                   placeholder="Enter First Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">Last Name <span class="required">*</span></label>
                                            <input class="form-control border-form" type="text" value=""
                                                   placeholder="Enter Last Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Phone Number <span class="required">*</span></label>
                                    <div class="input-group">
                                        <span class="input-group-addon">+44</span>
                                        <input type="text" class="form-control border-form" value="" required="required"
                                               placeholder="e.g. 123456789">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Address <span class="required">*</span></label>
                                    <input class="form-control border-form" type="text" value="" placeholder="Enter Address">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Avatar</label>
                                    <input type="file" class="filestyle">
                                    <span class="help-block"></span>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">Password <span class="required">*</span></label>
                                            <input class="form-control border-form" type="password" value=""
                                                   placeholder="Enter Password">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">Confirm Password <span class="required">*</span></label>
                                            <input class="form-control border-form" type="password" value=""
                                                   placeholder="Enter Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group margin-bottom-none">
                                    <div class="text-right">
                                        <button class="btn btn-success btn-sm" type="submit"><i class="fa fa-save"></i> Save
                                            Update</button>
                                        <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-close"></i>
                                            Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
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
                                        <img class="img-responsive img-center" src="images/categories/real_estate/2.png" alt="">
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
                                        <img class="img-responsive img-center" src="images/categories/cars/1.png" alt="">
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
                                        <img class="img-responsive img-center" src="images/categories/job/1.png" alt="">
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
                                        <img class="img-responsive img-center" src="images/categories/real_estate/2.png" alt="">
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
        </div>
    </section>
    <!-- End Settings -->
@endsection
