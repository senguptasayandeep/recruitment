@extends('admin::layouts.master') @section('content')
<section class="page-content">
    <div class="wrapper">
        <div class="page-header">
            <h1>Dashboard</h1>
        </div>



        <div class="row social">
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="panel panel-default twitter">
                    <div class="panel-body">
                        <small class="social-title">Active Job</small>
                        <h3 class="count">12,000</h3>
                        <i class="	fa fa-check-square"></i>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="panel panel-default google-plus">
                    <div class="panel-body">
                        <small class="social-title">User Response</small>
                        <h3 class="count">13,000</h3>
                        <i class="fa fa-line-chart"></i>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="panel panel-default facebook-like">
                    <div class="panel-body">
                        <small class="social-title">Last 24 Hours User Response</small>
                        <h3 class="count">14,000</h3>
                        <i class="fa fa-heart-o"></i>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="panel panel-default visitor">
                    <div class="panel-body">
                        <small class="social-title">Website Visitor</small>
                        <h3 class="count">15,000</h3>
                        <i class="fa fa-user"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
