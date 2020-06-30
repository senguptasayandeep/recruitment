@extends('admin::layouts.master')
@section('content')
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
                <li class="breadcrumb-item">Job Type</li>
            </ol>
            </nav>
        </div>

        <div class="panel my-panel">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-5">
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
                        <div style="margin-top: 15px;" class="message">
                            @include('admin::includes.messages')
                        </div>
                    </div>
                    <div class="col-md-7">
                        <table id="datatable" class="table table-striped table-bordered page-table" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Job Type</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($all_job_types as $all_job_type)
                                    <tr>
                                        <td data-th="Title">{{ $loop->iteration }}</td>
                                        <td>{{ $all_job_type->name }}</td>
                                        <td>{{ $all_job_type->check_status }}</td>
                                        <td>
                                            <button type="button" class="btn-link-td edit" data-toggle="modal" data-target="#JobTypeModal"><i class="fa fa-edit"></i>Edit</button>
                                        </td>
                                    </tr>
                                @empty
                                    <p>"No Data Found"</p>
                                @endforelse


                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>



    </div>

    {{-- <script>
        function JobTypeEdit(id) {
            var job_type_id = id;
            $.ajax({
                    url : "get_job_type",
                    type: "GET",
                    data : {'id':job_type_id},
                    success: function(data)
                    {
                        $("#job_type_details").html(data.msg);
                    },
                    error: function (data)
                    {

                    }
                });
        }
    </script> --}}
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script>

        $(document).ready(function() {

            var table = $('#datatable').DataTable();

            //Start Edit Record
            table.on('click','.edit',function(){

                $tr = $(this).closest('tr');
                if ($($tr).hasClass('child')) {
                    $tr = $tr.prev('.parent');
                }
                var data = table.row($tr).data();
                console.log(data);
                $('#id').val(data[0]);
                $('#name').val(data[1]);
                $('#status').val(data[2]);

                $('#editForm').attr('action',"{{ route('master_job_type_update') }}");
                $('#JobTypeModal').show();
            });
        });
    </script>
</section>



    <div id="JobTypeModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Update Job Type</h4>
        </div>
        <form action="/master_job_type_update" id="editForm" method="POST">
                @csrf

        <div class="modal-body" id="job_type_details">
            <input type="text" name="id" id="id" hidden>
                <div class="form-group">
                    <label>Job Type</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                    </select>
                </div>
                <input type="submit" value="Update" class="btn btn-primary">
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    </div>
@endsection
