@extends('admin::layouts.master') @section('content')
<section class="page-content">
    <div class="wrapper">
        <div class="page-header">
            <h1>Dashboard</h1>
        </div>

        <div class="content-box">
            <div class="row">
                <div class="col-sm-12 col-md-10 col-lg-8">
                    <form method="post" action="#" id="AdminForm" class="formular">
                        <div class="row">
                            <label class="col-sm-3 label-lg">Site Title</label>
                            <div class="col-sm-9 form-group"><input type="text" class="validate[required] text-input form-control" name="site_title" id="site_title" /></div>
                            <label class="col-sm-3 label-lg">Email Address </label>
                            <div class="col-sm-9 form-group"><input type="text" class="form-control validate[required],custom[email]] text-input" name="email" id="email" /></div>
                            <label class="col-sm-3 label-lg">New Password</label>
                            <div class="col-sm-9 form-group">
                                <input type="password" class="form-control validate[required,minSize[6]] text-input login-field login-field-password" id="password-3" name="password" />
                                <div class="clearfix strength-fld">
                                    <div id="pwdMeter" class="neutral">Very Weak</div>
                                </div>
                            </div>
                            <label class="col-sm-3 label-lg">Re-type Password</label>
                            <div class="col-sm-9 form-group"><input type="password" class="form-control validate[required,equals[password-3]] text-input" name="password3" id="password3" /></div>
                            <label class="col-sm-3 label-lg">Profile Picture</label>
                            <div class="col-sm-9 form-group clearfix profile-img">
                                <div class="avatar-img pull-left"><img src="http://d22r54gnmuhwmk.cloudfront.net/app-assets/global/default_user_icon-7a95ec473c1c41f6d020d32c0504a0ef.jpg" alt="" /></div>
                                <div class="fileUpload btn btn-default btn-xs pull-left">
                                    <span>Change your profile picture</span>
                                    <input type="file" class="upload" />
                                </div>
                            </div>
                            <div class="col-sm-9 col-sm-offset-3"><input type="submit" value="Save Changes" class="btn btn-primary" /></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>




    </div>
</section>
@endsection
