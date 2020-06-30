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
                <li class="breadcrumb-item"><a href="{{ url('admin') }}">Dashboard</a></li>
                <li class="breadcrumb-item">Add Job</li>
            </ol>
            </nav>
        </div>

        <div class="panel my-panel">
            <div class="panel-body">
                <form action="{{ route('job.store') }}" method="POST">
                @csrf
                    <div class="row">
                        <div class="col-md-9">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="title" >
                                </div>
                                <div class="form-group col-md-12 my-form">
                                    <label>Job Type</label><a style="cursor: pointer" data-toggle="modal" data-target="#jobtypeModal"><span class="label label-success"><i class="fa fa-plus"> Add New</i></span></a>
                                    <select class='fstdropdown-select' id="job_type" name="job_type">
                                        <option value="">Select</option>
                                        @foreach ($all_job_types as $all_job_type)
                                            <option value="{{ $all_job_type->id }}">{{ $all_job_type->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-12 my-form">
                                    <label>Post / Position</label><a style="cursor: pointer" data-toggle="modal" data-target="#positionModal"><span class="label label-success"><i class="fa fa-plus"> Add New</i></span></a>
                                    <select class='fstdropdown-select' id="post_position" name="job_position">
                                        <option value="">Select</option>
                                        @foreach ($all_job_positions as $all_job_position)
                                            <option value="{{ $all_job_position->id }}">{{ $all_job_position->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-12 my-form">
                                    <label>Industry</label><a style="cursor: pointer" data-toggle="modal" data-target="#industryModal"><span class="label label-success"><i class="fa fa-plus"> Add New</i></span></a>
                                    <select class='fstdropdown-select' id="industry" name="job_industry">
                                        <option value="">Select</option>
                                            @foreach ($all_industries as $all_industry)
                                                <option value="{{ $all_industry->id }}">{{ $all_industry->name }}</option>
                                            @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Skills</label>
                                    <input type="text" class="form-control" id="tokenfield" placeholder="separate with comma" name="skills[]"/>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Min Salary</label>
                                    <input type="text" class="form-control" name="min_salary"/>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Max Salary</label>
                                    <input type="text" class="form-control" name="max_salary" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Experience</label>
                                    <input type="number" class="form-control" name="experiance"/>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Unit</label>
                                    <select class="form-control" name="experiance_unit">
                                        <option value="">Select option</option>
                                        <option value="Month">Month</option>
                                        <option value="Year">Year</option>
                                    </select>
                                </div>
                                <div style="margin: 15px;">
                                    <div class="form-group">
                                        <label>Description (If any)</label>
                                        <textarea id="editor" class="form-control editor" name="description"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <input type="submit" value="Add" class="btn btn-primary btn-block">
                        </div>


                    </div>
                </form>
            </div>
        </div>



    </div>
</section>

        <!-- Job Type Modal Start Here-->
        <div class="modal fade" id="jobtypeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Job Type</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('master_job_type.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Job Type</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" id="" class="form-control" required>
                                    <option value="">Select</option>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                            <input type="submit" value="Add" class="btn btn-primary">
                        </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div><!--Job Type Modal End Here -->

        <!-- Post/Position Modal Start Here-->
        <div class="modal fade" id="positionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Post / Position</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('master_post_position.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Post / Position Name</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control" required>
                                <option value="">Select</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                        <input type="submit" value="Add" class="btn btn-primary">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div><!--Post / Position Modal End Here -->

        <!-- Industry Modal Start Here-->
        <div class="modal fade" id="industryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Industry</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('master_industry.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Industry</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" id="" class="form-control" required>
                                <option value="">Select</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                        <input type="submit" value="Add" class="btn btn-primary">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div><!--Industry Modal End Here -->

    {{-- <script>
        $('#tokenfield').tokenfield({
            autocomplete: {
                source: ['red','blue','green','yellow','violet','brown','purple','black','white'],
                delay: 100
            },
            showAutocompleteOnFocus: true
            })
    </script> --}}
@endsection
