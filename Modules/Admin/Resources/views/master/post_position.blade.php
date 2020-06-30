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
                <li class="breadcrumb-item">Post/POsition</li>
            </ol>
            </nav>
        </div>

        <div class="panel my-panel">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-5">
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
                        <div style="margin-top: 15px;" class="message">
                            @include('admin::includes.messages')
                        </div>
                    </div>
                    <div class="col-md-7">
                        <table id="datatable" class="table table-striped table-bordered page-table" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Post/Position</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($all_job_positions as $all_job_position)
                                    <tr>
                                    <td data-th="Title">{{ $loop->iteration }}</td>
                                    <td>{{ $all_job_position->name }}</td>
                                    <td>{{ $all_job_position->check_status }}</td>
                                    <td>
                                        <button type="button" class="btn-link-td edit" data-toggle="modal" data-target="#PostPositionModal" ><i class="fa fa-edit"></i>Edit</button>
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
</section>

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

                $('#editForm').attr('action',"{{ route('master_post_position_update') }}");
                $('#PostPositionModal').show();
            });
        });
    </script>



    <div id="PostPositionModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Update Post / Position</h4>
        </div>
        <form action="/master_post_position_update" id="editForm" method="POST">
                @csrf

        <div class="modal-body" id="post_postion_details">
            <input type="text" name="id" id="id" hidden>
                <div class="form-group">
                    <label>Post / Position</label>
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
