@extends('admin.layout.app')
@section('title')
    Location Settings
@endsection
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Location Settings</h1>
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
            <div class="col-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="row">
                            <div class="col-6">
                                <h6 class="m-0 font-weight-bold text-danger">City</h6>
                            </div>
                            <div class="col-6 text-right">
                                <a href="#" data-toggle="modal" data-target="#cityModal" class="btn-sm btn-danger">Add
                                    City</a>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @php
                                        $i = 0;
                                    @endphp
                                    @foreach ($cities as $city)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td> {{ $city->city_name }} </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="row">
                            <div class="col-6">
                                <h6 class="m-0 font-weight-bold text-danger">Location</h6>
                            </div>
                            <div class="col-6 text-right">
                                <a href="#" data-toggle="modal" data-target="#locationModal"
                                    class="btn-sm btn-danger">Add Location</a>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @php
                                        $i = 0;
                                    @endphp
                                    @foreach ($locations as $location)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td> {{ $location->location_name }} </td>
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

    <!-- Add City Modal-->
    <div class="modal fade" id="cityModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ route('city.add') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add City</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="city_name">City Name</label>
                            <input type="text" placeholder="Dhaka" name="city_name" class="form-control">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger">Add City</button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal"><i
                                class="fas fa-times"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Add Location Modal-->
    <div class="modal fade" id="locationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ route('location.add') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Location</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="location_name">Location Name</label>
                            <input type="text" placeholder="Dhaka" name="location_name" class="form-control">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger">Add Location</button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal"><i
                                class="fas fa-times"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- /.container-fluid -->
@endsection
