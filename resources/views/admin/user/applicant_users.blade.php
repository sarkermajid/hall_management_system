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
                                            <td>{{ $item->reg_no }}</td>
                                            <td>{{ $item->department }}</td>
                                            <td>{{ \Carbon\Carbon::parse($item->created_at)->format('F j, Y') }}</td>
                                            <td>
                                                @if ($item->status == 0)
                                                    <span class="badge bg-warning text-dark">Waiting</span>
                                                @elseif($item->status == 1)
                                                    <span class="badge bg-primary text-white">Available</span>
                                                @elseif($item->status == 2)
                                                    <span class="badge bg-success text-white">Approved</span>
                                                @endif
                                            </td>
                                            <td>
                                                @php
                                                    $btnClass = match ($item->status) {
                                                        0 => 'btn-inverse-warning',
                                                        1 => 'btn-inverse-primary',
                                                        2 => 'btn-inverse-success',
                                                    };
                                                @endphp

                                                <a href="{{ route('applicant.user.availability', ['id' => $item->id]) }}"
                                                    class="btn {{ $btnClass }}">
                                                    @if ($item->status == 0)
                                                        Waiting for Availability
                                                    @elseif($item->status == 1)
                                                        Check Availability
                                                    @else
                                                        Confirmed Availability
                                                    @endif
                                                </a>
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
