<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload Payment Slip</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-papqz+3V7mCL0N7n2h+EoWqzKssZav1Vd0X+z4kxZ8XxD6Ff6B2CQZ3VYY0Vf2kP3v2WjVX6+O8cG1vhwjwXgw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('frontend/css/home.css') }}">

</head>

<body>
    <form action="{{ route('submitPaymentSlip') }}" class="form" method="POST" enctype="multipart/form-data">
        @csrf
        <img src="{{ asset('frontend/img/university-logo.png') }}" width="100" height="100" alt="">
        <h2>Upload Payment Slip</h2>
        @if (session('message'))
            <div class="alert alert-{{ session('alert-type') }}" style="color: green; margin-bottom:15px;">
                {{ session('message') }}
            </div>
        @endif

        <input type="hidden" name="reg_no" value="{{ $user->reg_no }}">
        <div class="form-group">
            <label for="email">Upload Payment Slip:</label>
            <div class="relative">
                <div class="input-group">
                    <input type="file" name="payment_slip" class="form-control" required>
                    <i class="fa fa-link"></i>
                </div>
            </div>
        </div>

        <div class="tright">
            <a href=""><button class="movebtn movebtnre" type="Reset"><i class="fa fa-fw fa-refresh"></i> Reset
                </button></a>
            <a href=""><button class="movebtn movebtnsu" type="Submit">Submit <i
                        class="fa fa-fw fa-paper-plane"></i></button></a>
        </div>
    </form>


    <script src="{{ asset('frontend/js/home.js') }}"></script>
</body>

</html>
