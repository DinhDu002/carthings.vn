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
                            <h3>Reset Password</h3>
                        </div>
                        <div class="page_pagination">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                <li>Reset Password</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Breadcumb -->
@endsection

@section('forgot-password')
    <!-- Forgot Password -->
    <section class="forgot-password">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-4 col-sm-offset-4">
                    <div class="login-panel widget">
                        <div class="login-body">
                            <form>
                                <div class="form-group">
                                    <label class="control-label">Email <span class="required">*</span></label>
                                    <input type="text" placeholder="Your Email or Username" class="form-control">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-block btn-primary">Reset Password</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <p class="text-center margin-bottom-none">Don't have an account? <a
                                href="{{ route('signup') }}"><strong>Signup</strong></a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Forgot Password -->
@endsection
