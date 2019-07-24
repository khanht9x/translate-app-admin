@extends('Base::layouts.app')
@section('content')
<div class="signup-page">
    <div class="container">
        <div class="row">
            <!-- user-login -->
            <div class="col-lg-6 offset-lg-3">
                <div class="ragister-account">
                    <h1 class="section-title title">Create an Account</h1>

                    <form id="registation-form" name="registation-form" method="post" action="#">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" name="password" class="form-control" required="required">
                        </div>
                        <!-- checkbox -->
                        <div class="checkbox">
                            <label class="pull-left" for="signing"><input type="checkbox" name="signing" id="signing"> I agree to our Terms and Conditions </label>
                        </div><!-- checkbox -->
                        <div class="submit-button text-center">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </form>
                </div>
            </div><!-- user-login -->
        </div><!-- row -->
    </div><!-- container -->
</div><!-- signup-page -->
@endsection
