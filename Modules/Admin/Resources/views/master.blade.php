@extends('admin::layouts.master') @section('content')
<section class="page-content">
    <div class="wrapper">
        <div class="page-header">
            <nav aria-label="breadcrumb">
            {{-- <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Library</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ol> --}}
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                <li class="breadcrumb-item">Master</li>
            </ol>
            </nav>
        </div>

        <div class="row">


            <div class="col-sm-6 col-md-6 col-lg-3 navigation">
                <div class="panel panel-default " style="min-height: 120px;">
                    <div class="panel-body">
                        <a href="{{ route('master_job_type.index') }}"><i class="fa fa-bullseye"></i></a>
                        <p>Job Type</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-3 navigation">
                <div class="panel panel-default " style="min-height: 120px;">
                    <div class="panel-body">
                        <a href="{{ route('master_post_position.index') }}"><i class="fa fa-cubes"></i></a>
                        <p>Post/Position</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-3 navigation">
                <div class="panel panel-default " style="min-height: 120px;">
                    <div class="panel-body">
                        <a href="{{ route('master_industry.index') }}"><i class="fa fa-building"></i></a>
                        <p>Industry</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-3 navigation">
                <div class="panel panel-default " style="min-height: 120px;">
                    <div class="panel-body">
                        <a href="{{ route('master_tag_keyword.index') }}"><i class="fa fa-code-fork"></i></a>
                        <p>TAGS / Keywords</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
@endsection
