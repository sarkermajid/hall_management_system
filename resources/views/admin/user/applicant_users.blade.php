@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">All Applicant Users</h6>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Name</th>
                                        <th>Reg No</th>
                                        <th>Department</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->registration_num }}</td>
                                            <td>{{ $item->department }}</td>
                                            <td>{{ \Carbon\Carbon::parse($item->created_at)->format('F j, Y') }}</td>
                                            <td>
                                                <p
                                                    class="btn btn-sm {{ $item->status == 1 ? 'btn-inverse-info' : 'btn-inverse-danger' }}">
                                                    {{ $item->status == 1 ? 'Active' : 'Inactive' }}
                                                </p>
                                            </td>
                                            <td>
                                                <a href="{{ route('room.edit', ['id' => $item->id]) }}"
                                                    class="btn btn-inverse-primary"> Check Availability </a>
                                                <a href="{{ route('applicant.user.delete', ['id' => $item->id]) }}"
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
