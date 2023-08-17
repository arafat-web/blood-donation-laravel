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
                                <a href="{{ route('add.donor') }}" class="btn btn-danger">Add Donor</a>
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
                                        <th>Status</th>
                                        <th>Added Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($donors as $donor)
                                        <tr>
                                            <td>{{ $donor->fullname }}</td>
                                            <td>{{ $donor->blood_group_name }}</td>
                                            <td>{{ $donor->city_name }} {{ $donor->location_name }}</td>
                                            <td>{{ $donor->phone }}</td>
                                            <td>{{ $donor->email }}</td>
                                            <td>
                                                {{ $donor->active_status == 0 ? 'Inactive' : 'Active' }}
                                            </td>
                                            <td>{{ $donor->created_at->format('d-m-y') }}</td>
                                            <th>
                                                <a href="{{ route('delete.request', ['id'=> $donor->id]) }}" class="btn-sm btn-danger">Delete</a>
                                            </th>
                                        </tr>
                                    @endforeach

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
