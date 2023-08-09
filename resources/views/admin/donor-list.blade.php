@extends('admin.layout.app')
@section('title')
    Donor List
@endsection
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">All Donors</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="row">
                            <div class="col-6">
                                <h4 class="m-0 font-weight-bold text-danger">All Donor List</h4>
                            </div>
                            <div class="col-6 text-right">
                                <div class="btn btn-danger">Add Donor</div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Group</th>
                                        <th>Location</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Register Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>A+</td>
                                        <td>Dhaka, Bangladesh</td>
                                        <td>01789404345</td>
                                        <td>Arafat@gmail.com</td>
                                        <td>2011/04/25</td>
                                        <th>
                                            <a href="#" class="btn-sm btn-info">View</a>
                                            <a href="#" class="btn-sm btn-warning">Edit</a>
                                            <a href="#" class="btn-sm btn-danger">Delete</a>
                                        </th>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
