@extends('app')

@section('title', 'Car things - Category grid')

@section('Breadcumb')
    <!-- Breadcumb -->
    <section class="breadcumb_area">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="breadcumb_section">
                        <div class="page_title">
                            <h3>Pricing</h3>
                        </div>
                        <div class="page_pagination">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                <li>Pricing</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Breadcumb -->
@endsection

@section('pricing-table')
    <!-- pricing -->
    <section class="pricing-table">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="panel panel-default text-center basic-plan margin-bottom-none">
                        <div class="panel-heading">
                            <h3 class="panel-title bg-light py-2 border-bottom border-grey">Silver</h3>
                        </div>
                        <div class="panel-body">
                            <div class="plan-price">
                                <div class="price-value">$49<span>.00</span></div>
                                <div class="interval">per month</div>
                            </div>
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item"><i class="fa fa-check-square text-primary"></i> Free ad posting</li>
                            <li class="list-group-item"><i class="fa fa-check-square text-primary"></i> 6&nbsp;Featured ads
                                availability</li>
                            <li class="list-group-item"><i class="fa fa-check-square text-primary"></i> 10GB Disk Space</li>
                            <li class="list-group-item"><i class="fa fa-check-square text-primary"></i> 100% Secure!</li>
                            <li class="list-group-item"><a href="#" class="btn btn-primary">Sign Up!</a></li>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-primary text-center advanced-plan margin-bottom-none">
                        <div class="panel-heading">
                            <h3 class="panel-title text-white py-2">Advanced</h3>
                        </div>
                        <div class="panel-body">
                            <div class="plan-price">
                                <div class="price-value">$99<span>.00</span></div>
                                <div class="interval">per month</div>
                            </div>
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item"><i class="fa fa-check-square text-primary"></i> Free ad posting</li>
                            <li class="list-group-item"><i class="fa fa-check-square text-primary"></i> 6&nbsp;Featured ads
                                availability</li>
                            <li class="list-group-item"><i class="fa fa-check-square text-primary"></i> 10GB Disk Space</li>
                            <li class="list-group-item"><i class="fa fa-check-square text-primary"></i> 100% Secure! <a
                                        href="#" data-toggle="tooltip" data-placement="top"
                                        title="Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae,">
                                    &nbsp;<i class="fa fa-info-circle"></i></a></li>
                            <li class="list-group-item"><a href="#" class="btn btn-primary btn-lg">Sign Up!</a></li>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default text-center basic-plan">
                        <div class="panel-heading">
                            <h3 class="panel-title bg-light py-2 border-bottom border-grey">Professional</h3>
                        </div>
                        <div class="panel-body">
                            <div class="plan-price">
                                <div class="price-value">$199<span>.00</span></div>
                                <div class="interval">per month</div>
                            </div>
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item"><i class="fa fa-check-square text-primary"></i> Free ad posting</li>
                            <li class="list-group-item"><i class="fa fa-check-square text-primary"></i> 6&nbsp;Featured ads
                                availability</li>
                            <li class="list-group-item"><i class="fa fa-check-square text-primary"></i> 10GB Disk Space</li>
                            <li class="list-group-item"><i class="fa fa-check-square text-primary"></i> 100% Secure!</li>
                            <li class="list-group-item"><a href="#" class="btn btn-primary">Sign Up!</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End pricing -->
@endsection
