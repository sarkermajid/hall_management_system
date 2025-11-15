@extends('admin.admin_dashboard')
@section('admin')
    <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <div class="page-content">
        <div class="row profile-body">
            <div class="col-md-12 col-xl-12 middle-wrapper">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Confirm Availability</h6>
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if (session('warning'))
                                <div class="alert alert-warning">
                                    {{ session('warning') }}
                                </div>
                            @endif
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form method="POST" action="{{ route('confirm.user.availability') }}" class="forms-sample"
                                id="myForm" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" value="{{ $user->name }}" name="name"
                                                class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" value="{{ $user->email }}" name="email"
                                                class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <label for="phone" class="form-label">Phone</label>
                                            <input type="text" value="{{ $user->phone }}" name="phone"
                                                class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <label for="reg_no" class="form-label">Registration No</label>
                                            <input type="text" value="{{ $user->reg_no }}" name="reg_no"
                                                class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <label for="department" class="form-label">Department</label>
                                            <input type="text" value="{{ $user->department }}" name="department"
                                                class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <label for="hall_id" class="form-label">Hall</label>
                                            <input type="text" value="{{ $user->Halls->name ?? '' }}" name="hall_id"
                                                class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <label for="room_number" class="form-label">Room</label>
                                            <input type="text" value="{{ $user->room->room_number }}" name="room_number"
                                                class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <label for="gender" class="form-label">Gender</label>
                                            <input type="text" value="{{ $user->gender }}" name="gender"
                                                class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <tr>
                                            <label for="payment_slip" class="form-label">Payment Slip</label>
                                            <td colspan="2">
                                                <object data="{{ asset('payment_slips/' . $user->payment_slip) }}"
                                                    type="application/pdf" width="100%" height="500px">
                                                    <p>Your browser does not support PDFs. <a
                                                            href="{{ asset('payment_slips/' . $user->payment_slip) }}"
                                                            target="_blank">Download it here</a>.</p>
                                                </object>
                                            </td>
                                        </tr>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <label for="status" class="form-label">Status</label>
                                            <select name="status" id="status" class="form-control">
                                                <option value="">--- Select Status --- </option>
                                                <option value="0" {{ $user->status == 0 ? 'selected' : '' }}>Waiting
                                                </option>
                                                <option value="1" {{ $user->status == 1 ? 'selected' : '' }}>
                                                    Available
                                                </option>
                                                <option value="2" {{ $user->status == 2 ? 'selected' : '' }}>Approved
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <label for="expire_date" class="form-label">Expire Date</label>
                                            <input type="text" id="expire_date" name="expire_date"
                                                value="{{ $user->expire_date }}" class="form-control">
                                        </div>
                                    </div>
                                </div>


                                <div class="row" id="passwordField" style="display:none;">
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            (<small class="text-warning" id="passwordInfo">
                                                Provide a password for Approved users to enable login and grant full access
                                                to their assigned hall and room.
                                            </small>)
                                            <input type="password" value="{{ $user->password }}" name="password"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>


                                <button type="submit" class="btn btn-primary me-2">Save Changes</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        flatpickr("#expire_date", {
            dateFormat: "Y-m-d",
            allowInput: true,
        });
    </script>

    <script>
        function togglePasswordField() {
            var status = document.getElementById('status').value;
            var pwdField = document.getElementById('passwordField');

            if (status == 2) {
                pwdField.style.display = 'block';
            } else {
                pwdField.style.display = 'none';
            }
        }

        document.getElementById('status').addEventListener('change', togglePasswordField);

        // Page load e check korte (if already approved)
        window.onload = togglePasswordField;
    </script>

@endsection
