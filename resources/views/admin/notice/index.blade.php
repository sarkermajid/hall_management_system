@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <div class="row">
            @if(auth()->user()->role_id == 1)
            <nav class="page-breadcrumb">
                <ol class="breadcrumb">
                    <a href="{{ route('notice.add') }}" class="btn btn-inverse-primary">Add Notice</a>
                </ol>
            </nav>
            @endif
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">All Notices</h6>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($notices as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ \Illuminate\Support\Str::words($item->description, 8, '...') }}</td>
                                            <td>{{ \Carbon\Carbon::parse($item->created_at)->format('F j, Y') }}</td>
                                            <td>
                                                <a href="{{ route('notice.view', ['id' => $item->id]) }}"
                                                    class="btn btn-inverse-info"> View </a>
                                                @if(auth()->user()->role_id == 1)
                                                <a href="{{ route('notice.edit', ['id' => $item->id]) }}"
                                                    class="btn btn-inverse-primary"> Edit </a>
                                                <a href="{{ route('notice.delete', ['id' => $item->id]) }}"
                                                    class="btn btn-inverse-danger" id="delete"> Delete </a>
                                                @endif
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
