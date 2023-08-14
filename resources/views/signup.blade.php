@extends('app')

@section('title', 'Car things - Categories')

@section('Breadcumb')
    <!-- Breadcumb -->
    <section class="breadcumb_area">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="breadcumb_section">
                        <div class="page_title">
                            <h3>Sign Up</h3>
                        </div>
                        <div class="page_pagination">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                <li>Sign Up</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Breadcumb -->
@endsection

@section('signup')
    <!-- signup -->
    <section class="signup">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-4 col-sm-offset-4">
                    <div class="login-panel widget">
                        <div class="login-body">
                            <form>
                                <div class="form-group">
                                    <label class="control-label">Email <span class="required">*</span></label>
                                    <input type="text" placeholder="Email Address" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Password <span class="required">*</span></label>
                                    <input type="password" placeholder="Password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Confirm Password <span class="required">*</span></label>
                                    <input type="password" placeholder="Confirm Password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-block btn-primary">Sign Up</button>
                                </div>
                            </form>
                        </div>
                        <div class="login-footer">
                            <div class="checkbox checkbox-primary pull-left">
                                <input id="checkbox2" type="checkbox">
                                <label for="checkbox2">
                                    I Agree with Term and Conditions
                                </label>
                            </div>
                        </div>
                    </div>
                    <p class="text-center margin-bottom-none"><a href="{{ route('login') }}"><strong>Have an account? </strong></a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End signup -->
@endsection
