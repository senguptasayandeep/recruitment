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
                <li class="breadcrumb-item">Job Manager</li>
            </ol>
            </nav>
        </div>

        <div class="row">


            <div class="col-sm-6 col-md-6 col-lg-3 navigation">
                <div class="panel panel-default " style="min-height: 120px;">
                    <div class="panel-body">
                        <a href="#"><i class="fa fa-clone"></i></a>
                        <p>All Jobs</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-3 navigation">
                <div class="panel panel-default " style="min-height: 120px;">
                    <div class="panel-body">
                        <a href="{{ route('add_job') }}"><i class="fa fa-plus-circle"></i></a>
                        <p>Add Job</p>
                    </div>
                </div>
            </div>



        </div>

    </div>
</section>
@endsection
