@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <a href="{{ route('admin.add.daily.expense') }}" class="btn btn-inverse-primary">Add Daily Expense</a>
            </ol>
        </nav>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">All Daily Expense</h6>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Date</th>
                                        <th>Total Expense</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dailyExpenses as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->date }}</td>
                                            <td>{{ $item->total_price.' BDT'}}  </td>
                                            <td>
                                                <a href="{{ route('admin.view.daily.expense', ['id'=>$item->id]) }}" class="btn btn-inverse-info"> View </a>
                                                {{-- <a href="{{ route('admin.edit.daily.market', ['id'=>$item->id]) }}" class="btn btn-inverse-primary">Edit</a> --}}
                                                <a href="{{ route('admin.delete.daily.expense',['id'=>$item->id]) }}" id="delete" class="btn btn-inverse-danger"> Delete </a>
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
