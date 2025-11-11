@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <div class="row">
            <nav class="page-breadcrumb">
                <ol class="breadcrumb">
                    <a href="{{ route('provost.add') }}" class="btn btn-inverse-primary">Add Provost</a>
                </ol>
            </nav>
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">All Provosts</h6>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Hall</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($provosts as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->Halls->name }}</td>
                                            <td>{{ \Carbon\Carbon::parse($item->created_at)->format('F j, Y') }}</td>
                                            <td>
                                                <a href="{{ route('provost.view', ['id' => $item->id]) }}"
                                                    class="btn btn-inverse-info"> View </a>
                                                <a href="{{ route('provost.delete', ['id' => $item->id]) }}"
                                                    class="btn btn-inverse-danger" id="delete"> Delete </a>
                                            </td>
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
@endsection
