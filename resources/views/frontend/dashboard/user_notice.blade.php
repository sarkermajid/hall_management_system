@include('frontend.dashboard.header')
<div class="col-md-9">
    <!-- User Details Card -->
    <div class="card shadow-sm mb-5">
        <div class="card shadow-sm mb-5">
            <div class="card-header text-white" style="background-color:#0C1427;">
                <h4 class="mb-0 text-center" style="color: #1abc9c;">Notices</h4>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped mb-0">
                        <thead style="background-color:#1ABC9C; color:white;">
                            <tr>
                                <th style="width: 10%">SL</th>
                                <th style="width: 70%">Title</th>
                                <th style="width: 20%" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($notices as $key => $notice)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $notice->title }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('user.notice.view', $notice->id) }}" class="btn btn-sm"
                                            style="background-color: #0C1427; color:#1abc9c">
                                            View
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
</div>
@include('frontend.dashboard.footer')
