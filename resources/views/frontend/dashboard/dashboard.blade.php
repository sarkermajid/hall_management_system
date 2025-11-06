<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" /> --}}
    <!-- toster message link -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
</head>

<body class="" style="background-color: #EAF1F3">
    <div class="container mt-5">

        <h2 class="text-center display-5 mb-4"
            style="font-weight: bold; font-family:'Courier New', Courier, monospace; color:#0C1427">
            Hostel Management System
        </h2>

        <div class="row mb-4">
            <div class="col-lg-12">
                <p class="text-center bg-danger text-white py-2" style="font-size: 18px">
                    <span style="font-weight: 800">Notice: </span> Please download your approved invoice for hostel
                    allocation.
                </p>
            </div>
        </div>

        <div class="mb-4 text-center">
            <a href="{{ route('user.invoice') }}" class="btn btn-success me-2">Download Approved Invoice</a>
            <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
        </div>

        <!-- User Details Card -->
        <div class="card shadow-sm mb-5">
            <div class="card-header bg-dark text-white">
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
                    <div class="col-md-6"><strong>Hall:</strong> {{ auth()->user()->Halls->name ?? 'N/A' }}</div>
                    <div class="col-md-6"><strong>Room:</strong> {{ auth()->user()->room->room_number ?? 'N/A' }}</div>
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
                            <a class="btn btn-sm btn-success" href="{{ asset('payment_slips/' . auth()->user()->payment_slip) }}"
                                target="_blank">View/Download</a>
                        @else
                            Not Submitted
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </div>




    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- bootstrap js --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    {{-- sweetalert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{ asset('backend/assets/js/code/code.js') }}"></script>
    <!-- toster message links -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info(" {{ Session::get('message') }} ");
                    break;

                case 'success':
                    toastr.success(" {{ Session::get('message') }} ");
                    break;

                case 'warning':
                    toastr.warning(" {{ Session::get('message') }} ");
                    break;

                case 'error':
                    toastr.error(" {{ Session::get('message') }} ");
                    break;
            }
        @endif
    </script>

</body>

</html>
