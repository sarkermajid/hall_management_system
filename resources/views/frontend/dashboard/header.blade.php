<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- toster message link -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
</head>

<body class="" style="background-color: #0C1427">
    <h2 class="text-center display-5 mb-4 mt-5"
        style="font-weight: bold; font-family:'Courier New', Courier, monospace; color:#1abc9c">
        Hostel Management System
    </h2>

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-3">
                @include('frontend.dashboard.sidebar')
            </div>
