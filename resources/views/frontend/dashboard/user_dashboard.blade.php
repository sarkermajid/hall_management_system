@include('frontend.dashboard.header')

        <div class="col-md-9">
            <!-- User Details Card -->
            <div class="card shadow-sm mb-5">
                <div class="card-header" style="color: #1abc9c; background-color:#0C1427">
                    <h4 class="mb-0 text-center">Your Hostel Allocation Details</h4>
                </div>
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-6"><strong>Name:</strong> {{ auth()->user()->name }}</div>
                        <div class="col-md-6"><strong>Registration No:</strong> {{ auth()->user()->reg_no }}</div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-6"><strong>Email:</strong> {{ auth()->user()->email }}</div>
                        <div class="col-md-6"><strong>Phone:</strong> {{ auth()->user()->phone }}</div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-6"><strong>Department:</strong> {{ auth()->user()->department }}</div>
                        <div class="col-md-6"><strong>Status:</strong>
                            {{ auth()->user()->status == 2 ? 'Approved' : 'Pending' }}
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-6"><strong>Hall:</strong> {{ auth()->user()->Halls->name ?? 'N/A' }}
                        </div>
                        <div class="col-md-6"><strong>Room:</strong>
                            {{ auth()->user()->room->room_number ?? 'N/A' }}</div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-6"><strong>Allocation Date:</strong>
                            {{ auth()->user()->updated_at->format('d M, Y') }}</div>
                        <div class="col-md-6"><strong>Provost:</strong>
                            {{ auth()->user()->Halls->provost_name ?? 'Authorized Person' }}</div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <strong>Payment Slip:</strong>
                            @if (auth()->user()->payment_slip)
                                <a class="btn btn-sm" style="background-color: #0C1427; color:#1abc9c"
                                    href="{{ asset('payment_slips/' . auth()->user()->payment_slip) }}"
                                    target="_blank">View/Download</a>
                            @else
                                Not Submitted
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

@include('frontend.dashboard.footer')
