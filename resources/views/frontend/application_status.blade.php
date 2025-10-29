<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Check Application Status</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-papqz+3V7mCL0N7n2h+EoWqzKssZav1Vd0X+z4kxZ8XxD6Ff6B2CQZ3VYY0Vf2kP3v2WjVX6+O8cG1vhwjwXgw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('frontend/css/home.css') }}">

</head>

<body>
    <form action="{{ route('checkApplicationStatus') }}" class="form" method="POST">
        @csrf
        <img src="{{ asset('frontend/img/university-logo.png') }}" width="100" height="100" alt="">
        <h2>Check Application Status</h2>
        @if (session('message'))
            <div class="alert alert-{{ session('alert-type') }}" style="color: green; margin-bottom:15px;">
                {{ session('message') }}
            </div>
        @endif
        <div class="form-group">
            <label>Registration Number:</label>
            <div class="relative">
                <input class="form-control" name="reg_no" value="{{ old('registration_num') }}" type="text"
                    required="" placeholder="Mention your registration number...">
                <i class="fa fa-building"></i>
            </div>
        </div>

        <div class="tright">
            <a href=""><button class="movebtn movebtnre" type="Reset"><i class="fa fa-fw fa-refresh"></i> Reset
                </button></a>
            <a href=""><button class="movebtn movebtnsu" type="Submit">Submit <i
                        class="fa fa-fw fa-paper-plane"></i></button></a>
        </div>
        @if (!empty($user))
            <table class="custom-table">
                <thead class="text-center bg-dark text-white">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Application Status</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @if ($user->status == 0)
                                <span class="badge-warning text-dark">Waiting</span>
                            @elseif($user->status == 1)
                                <span class="badge-info text-white">Available</span>
                            @elseif($user->status == 2)
                                <span class="badge-success text-white">Approved</span>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            @if ($user->status == 1)
                <div class="badge-success" style="padding: 20px; margin-top:20px;">
                    <strong>Congratulations!</strong>
                    Your hostel accommodation request has been approved and a room is now available for you.
                    To finalize your accommodation, please complete the required payment and upload the payment slip
                    using the link below
                    <br>
                    <a href="{{ route('paymentSlipUpload', $user->reg_no) }}" class="btn btn-primary btn-sm mt-2">
                        Upload Payment Slip
                    </a>

                </div>
            @endif
        @endif
    </form>

    <style>
        .custom-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 25px;
            font-family: Arial, sans-serif;
        }

        .custom-table thead {
            background: #1e293b;
            color: #fff;
        }

        .custom-table th,
        .custom-table td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: center;
        }

        .custom-table tr:nth-child(even) {
            background: #f8fafc;
        }

        .badge {
            padding: 6px 10px;
            border-radius: 4px;
            font-size: 13px;
            font-weight: bold;
        }

        .badge-warning {
            background: #ffecb5;
            border: 1px solid #ffd53e;
            color: #795700;
            padding: 5px;
        }

        .badge-success {
            background: #d1e7dd;
            border: 1px solid #0f5132;
            color: #0f5132;
            padding: 5px;
        }
        .badge-info {
            background: #d1e7dd;
            border: 1px solid #117A8B;
            color: #117A8B;
            padding: 5px;
        }

        .badge-danger {
            background: #f8d7da;
            border: 1px solid #842029;
            color: #842029;
            padding: 5px;
        }

        .badge-secondary {
            background: #e2e3e5;
            border: 1px solid #41464b;
            color: #41464b;
            padding: 5px;
        }
    </style>

    <script src="{{ asset('frontend/js/home.js') }}"></script>
</body>

</html>
