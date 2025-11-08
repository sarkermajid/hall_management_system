<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Application Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-papqz+3V7mCL0N7n2h+EoWqzKssZav1Vd0X+z4kxZ8XxD6Ff6B2CQZ3VYY0Vf2kP3v2WjVX6+O8cG1vhwjwXgw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('frontend/css/home.css') }}">
</head>

<body>
    <form action="{{ route('submitApplication') }}" class="form" method="POST">
        @csrf
        <img src="{{ asset('frontend/img/university-logo.png') }}" width="100" height="100" alt="">
        <h2>Application for Hostel Accommodation</h2>
        <!-- Success / Custom Session Message -->
        @if (session('message'))
            <div class="alert alert-{{ session('alert-type') }}" style="margin-bottom: 15px;color:green">
                {{ session('message') }}
            </div>
        @endif

        <!-- Validation Errors -->
        @if ($errors->any())
            <div class="alert alert-danger" style="margin-bottom: 15px; color:red">
                <ul style="margin:0; padding-left: 20px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-group">
            <label>Full Name:</label>
            <div class="relative">
                <input class="form-control" name="name" value="{{ old('name') }}" type="text" required=""
                    placeholder="Type your name here...">
                <i class="fa fa-user"></i>
            </div>
        </div>
        <div class="form-group">
            <label for="email">Email address:</label>
            <div class="relative">
                <input class="form-control" type="email" name="email" value="{{ old('email') }}" required=""
                    placeholder="Type your email address...">
                <i class="fa fa-envelope"></i>
            </div>
        </div>
        <div class="form-group">
            <label for="email">Contact Number:</label>
            <div class="relative">
                <input class="form-control" type="text" name="phone" value="{{ old('phone') }}" maxlength="11"
                    required="" placeholder="Type your Mobile Number...">
                <i class="fa fa-phone"></i>
            </div>
        </div>
        <div class="form-group">
            <label>Registration Number:</label>
            <div class="relative">
                <input class="form-control" name="reg_no" value="{{ old('registration_num') }}" type="text"
                    required="" placeholder="Mention your registration number...">
                <i class="fa fa-building"></i>
            </div>
        </div>
        <div class="form-group">
            <label>Department:</label>
            <div class="relative">
                <input class="form-control" type="text" name="department" value="{{ old('department') }}"
                    pattern="[a-zA-Z\s]+" required="" placeholder="Mention your department...">
                <i class="fa fa-building"></i>
            </div>
        </div>

        <div class="gender-wrapper">
            <label class="gender-item">
                <input type="radio" name="gender" value="male">
                Male
            </label>

            <label class="gender-item">
                <input type="radio" name="gender" value="female">
                Female
            </label>
        </div>


        <div class="tright">
            <a href=""><button class="movebtn movebtnre" type="Reset"><i class="fa fa-fw fa-refresh"></i> Reset
                </button></a>
            <button class="movebtn movebtnsu" type="submit">
                Submit <i class="fa fa-fw fa-paper-plane"></i>
            </button>
        </div>
        <div>If you have previously submitted a Hostel accommodation, you may check your current <a
                href="{{ route('applicationStatus') }}">application
                status</a>.</div>
    </form>

    <script src="{{ asset('frontend/js/home.js') }}"></script>
</body>
<style>
    .gender-wrapper {
        display: flex;
        align-items: center;
        gap: 25px;
        /* distance maintain */
        margin-top: 5px;
    }

    .gender-item {
        display: flex;
        align-items: center;
        gap: 5px;
        font-weight: 500;
        cursor: pointer;
    }

    .gender-item input {
        width: 16px;
        height: 16px;
        cursor: pointer;
    }
</style>

</html>
