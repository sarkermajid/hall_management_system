@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
            <div>
                <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
            </div>
            <div class="d-flex align-items-center flex-wrap text-nowrap">
                <div class="input-group flatpickr wd-200 me-2 mb-2 mb-md-0" id="dashboardDate">
                    <span class="input-group-text input-group-addon bg-transparent border-primary" data-toggle><i
                            data-feather="calendar" class="text-primary"></i></span>
                    <input type="text" class="form-control bg-transparent border-primary" placeholder="Select date"
                        data-input>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
                <div class="card rounded">
                    <div class="card-body">
                        <div class="mt-1">
                            <h3 class="text-center fw-bolder mb-0 text-uppercase">Total Halls</h3>
                        </div>
                        <div class="mt-2">
                            <h2 class="text-center fw-bolder mb-0 text-uppercase">{{ $halls }}</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
                <div class="card rounded">
                    <div class="card-body">
                        <div class="mt-1">
                            <h3 class="text-center fw-bolder mb-0 text-uppercase">Total Seats</h3>
                        </div>
                        <div class="mt-2">
                            <h2 class="text-center fw-bolder mb-0 text-uppercase">{{ $totalSeats }}</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
                <div class="card rounded">
                    <div class="card-body">
                        <div class="mt-1">
                            <h3 class="text-center fw-bolder mb-0 text-uppercase">Available Seats</h3>
                        </div>
                        <div class="mt-2">
                            <h2 class="text-center fw-bolder mb-0 text-uppercase">{{ $availableSeats }}</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper mt-3">
                <div class="card rounded">
                    <div class="card-body">
                        <div class="mt-1">
                            <h3 class="text-center fw-bolder mb-0 text-uppercase">Total Provosts</h3>
                        </div>
                        <div class="mt-2">
                            <h2 class="text-center fw-bolder mb-0 text-uppercase">{{ $provosts }}</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper mt-3">
                <div class="card rounded">
                    <div class="card-body">
                        <div class="mt-1">
                            <h3 class="text-center fw-bolder mb-0 text-uppercase">Approved Students</h3>
                        </div>
                        <div class="mt-2">
                            <h2 class="text-center fw-bolder mb-0 text-uppercase">{{ $approveStudents }}</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper mt-3">
                <div class="card rounded">
                    <div class="card-body">
                        <div class="mt-1">
                            <h3 class="text-center fw-bolder mb-0 text-uppercase">Waiting Students</h3>
                        </div>
                        <div class="mt-2">
                            <h2 class="text-center fw-bolder mb-0 text-uppercase">{{ $waitingStudents }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
