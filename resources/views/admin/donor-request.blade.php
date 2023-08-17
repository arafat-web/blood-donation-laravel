@extends('admin.layout.app')
@section('title')
    Donor Request Management
@endsection

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">All Donor Request</h1>
        </div>
        @if (session()->has('message'))
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                {{ session('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="row">
                            <div class="col-6">
                                <h4 class="m-0 font-weight-bold text-danger">All Donor Request List</h4>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered datatable" id="dataTable" width="100%" cellspacing="0">
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

                                                <a class="btn-sm btn-success" href="{{ route('accept.donor', ['id' => $donor->id]) }}">Accept</a>

                                            </td>
                                            <td>{{ $donor->created_at->format('d-m-y') }}</td>
                                            <th>
                                                <a href="{{ route('delete.request', ['id'=>$donor->id]) }}" class="btn-sm btn-danger">Delete</a>
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
