@include('frontend.dashboard.header')
<div class="col-md-9">
    <!-- User Details Card -->
    <div class="card shadow-sm mb-5">
        <div class="card shadow-sm mb-5">
            <div class="card-header text-white" style="background-color:#0C1427;">
                <h4 class="mb-0 text-center" style="color: #1abc9c;">Notice</h4>
            </div>

            <div class="card-body">
                <h5 class="text-uppercase fw-bold mb-3" style="color:#0C1427;">
                    {{ $notice->title }}
                </h5>
                <p class="text-justify" style="font-size: 16px; line-height: 1.7; color:#333;">
                    {{ $notice->description }}
                </p>
            </div>
        </div>
    </div>
</div>
@include('frontend.dashboard.footer')
