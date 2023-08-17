@extends('admin.layout.app')
@section('title')
    Donation Settings
@endsection
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Donation Settings</h1>
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
                                <h4 class="m-0 font-weight-bold text-danger">Donation Settings</h4>
                            </div>
                            <div class="col-6 text-right">
                                <a href="#" data-toggle="modal" data-target="#groupModal" class="btn btn-danger">Add
                                    Group</a>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Group</th>
                                        <th>Added Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 0;
                                    @endphp
                                    @foreach ($bloods as $item)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $item->blood_group }}</td>
                                            <td>{{ $item->created_at->format('d-m-Y')}}</td>
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
    <!-- Modal -->
    <div class="modal fade" id="groupModal" tabindex="-1" aria-labelledby="groupModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="groupModalLabel">Add Group</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('blood.add') }}" method="POST">
                    @csrf
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="blood_group">Blood Group</label>
                            <input type="text" placeholder="O+" name="blood_group" class="form-control" id="blood_group">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger">Add Group</button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal"><i
                                class="fas fa-times"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
