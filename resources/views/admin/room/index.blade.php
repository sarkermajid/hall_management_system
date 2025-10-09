@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <div class="row">
            <nav class="page-breadcrumb">
                <ol class="breadcrumb">
                    <a href="{{ route('room.add') }}" class="btn btn-inverse-primary">Add Room</a>
                </ol>
            </nav>
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">All Rooms</h6>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Room Number</th>
                                        <th>Hall Name</th>
                                        <th>Total Seats</th>
                                        <th>Available Seats</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rooms as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->room_number }}</td>
                                            <td>{{ $item->Halls->name }}</td>
                                            <td>{{ $item->total_seats }}</td>
                                            <td>{{ $item->available_seats }}</td>
                                            <td>{{ \Carbon\Carbon::parse($item->created_at)->format('F j, Y') }}</td>
                                            <td>
                                                <a href="{{ route('room.edit', ['id' => $item->id]) }}"
                                                    class="btn btn-inverse-primary"> Edit </a>
                                                <a href="{{ route('room.delete', ['id' => $item->id]) }}"
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
