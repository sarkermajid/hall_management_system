@extends('admin.admin_dashboard')
@section('admin')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body py-5 mt-5">
                    <table class="table table-bordered">
                        <div class="col-12 mb-3">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18">Provost Details</h4>
                            </div>
                        </div>
                        <tbody>
                            <tr>
                                <td class="payment-title"><strong>Name :</strong></td>
                                <td class="text-style">{{ $provost->name }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Email :</strong></td>
                                <td class="text-style">{{ $provost->email }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Hall :</strong></td>
                                <td class="text-style">{{ $provost->Halls->name }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Date :</strong></td>
                                <td class="text-style">{{ \Carbon\Carbon::parse($provost->created_at)->format('F j, Y') }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
