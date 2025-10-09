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
    <form class="form">
        <img src="{{ asset('frontend/img/university-logo.png') }}" width="100" height="100" alt="">
        <h2>Application for Hostel Accommodation</h2>
        <div class="form-group">
            <label for="email">Full Name:</label>
            <div class="relative">
                <input class="form-control" id="name" type="text" pattern="[a-zA-Z\s]+" required=""
                    autofocus="" title="Username should only contain letters. e.g. Piyush Gupta" autocomplete=""
                    placeholder="Type your name here...">
                <i class="fa fa-user"></i>
            </div>
        </div>
        <div class="form-group">
            <label for="email">Email address:</label>
            <div class="relative">
                <input class="form-control" type="email" required="" placeholder="Type your email address..."
                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                <i class="fa fa-envelope"></i>
            </div>
        </div>
        <div class="form-group">
            <label for="email">Contact Number:</label>
            <div class="relative">
                <input class="form-control" type="text" maxlength="10"
                    oninput="this.value=this.value.replace(/[^0-9]/g,'');" required=""
                    placeholder="Type your Mobile Number...">
                <i class="fa fa-phone"></i>
            </div>
        </div>
        <div class="form-group">
            <label for="email">Registration Number:</label>
            <div class="relative">
                <input class="form-control" type="text" pattern="[a-zA-Z\s]+" required=""
                    placeholder="Mention your registration number...">
                <i class="fa fa-building"></i>
            </div>
        </div>
        <div class="form-group">
            <label for="email">Department:</label>
            <div class="relative">
                <input class="form-control" type="text" pattern="[a-zA-Z\s]+" required=""
                    placeholder="Mention your department...">
                <i class="fa fa-building"></i>
            </div>
        </div>

        {{-- <div class="form-group">
            <label for="email">Attachment:</label>
            <div class="relative">
                <div class="input-group">
                    <label class="input-group-btn">
                        <span class="btn btn-default">
                            Browse&hellip; <input type="file" style="display: none;" multiple>
                        </span>
                    </label>
                    <input type="text" class="form-control" required="" placeholder="Attachment..." readonly>
                    <i class="fa fa-link"></i>
                </div>
            </div>
        </div> --}}

        <div class="tright">
            <a href=""><button class="movebtn movebtnre" type="Reset"><i class="fa fa-fw fa-refresh"></i> Reset
                </button></a>
            <a href=""><button class="movebtn movebtnsu" type="Submit">Submit <i
                        class="fa fa-fw fa-paper-plane"></i></button></a>
        </div>
    </form>

    <div class="thanks" style="display: none;">
        <h4>Thank you!</h4>
        <p><small>Your message has been successfully sent.</small></p>
    </div>

    <script src="{{ asset('frontend/js/home.js') }}"></script>
</body>

</html>
