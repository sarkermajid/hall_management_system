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
    <div class="container">
        <h2 class="text-center pt-5 display-5"
            style="font-weight: bold; font-family:'Courier New', Courier, monospace; color:#0C1427">TURNTIN</h2>
        @if($notice->notice !== NULL)
        <div class="row">
            <div class="col-lg-12">
                <p class="text-center bg-danger text-white py-3" style="font-size: 20px"><span style="font-weight: 800">Notice: </span>{{ $notice->notice }}</p>
            </div>
        </div>
        <a href="{{ route('user.logout') }}" class="btn btn-sm btn-danger">Logout</a>
        @else
        <div class="row mb-3 pt-3">
            <div class="col-lg-8"></div>
            <div class="col-lg-4">
                <div class="top-button" style="margin-left: 180px;">
                    <a href="" class="btn btn-sm btn-success" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Submit File</a>
                    <a href="" class="btn btn-sm btn-info">Slots: {{ Auth::user()->slot }}</a>
                    <a href="{{ route('user.logout') }}" class="btn btn-sm btn-danger">Logout</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <table class="table" id="dataTableExample">
                    <thead>
                        <th>ID</th>
                        <th>Submitted File</th>
                        <th>AI</th>
                        <th>Similarity</th>
                        <th>Flags</th>
                        <th>Status</th>
                        <th>Created At</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        @foreach ($files as $file)
                        <tr>
                            <td class="file-report-view" data-bs-toggle="modal" data-bs-target="#file-report-view" data-id="{{ $file->id }}" data-file_name="{{ $file->file_name }}" data-ai="{{ $file->ai }}" data-similarity="{{ $file->similarity }}" data-plagiarism_report="{{ $file->plagiarism_report }}" data-ai_report="{{ $file->ai_report }}">{{ $loop->iteration }}</td>
                            <td class="file-report-view" data-bs-toggle="modal" data-bs-target="#file-report-view" data-id="{{ $file->id }}" data-file_name="{{ $file->file_name }}" data-ai="{{ $file->ai }}" data-similarity="{{ $file->similarity }}" data-plagiarism_report="{{ $file->plagiarism_report }}" data-ai_report="{{ $file->ai_report }}">{{ $file->file_name }}</td>
                            <td class="file-report-view" data-bs-toggle="modal" data-bs-target="#file-report-view" data-id="{{ $file->id }}" data-file_name="{{ $file->file_name }}" data-ai="{{ $file->ai }}" data-similarity="{{ $file->similarity }}" data-plagiarism_report="{{ $file->plagiarism_report }}" data-ai_report="{{ $file->ai_report }}">{{ $file->ai !== null ? $file->ai . '%' : '-' }}</td>
                            <td class="file-report-view" data-bs-toggle="modal" data-bs-target="#file-report-view" data-id="{{ $file->id }}" data-file_name="{{ $file->file_name }}" data-ai="{{ $file->ai }}" data-similarity="{{ $file->similarity }}" data-plagiarism_report="{{ $file->plagiarism_report }}" data-ai_report="{{ $file->ai_report }}">{{ $file->similarity !== null ? $file->similarity . '%' : '-' }}</td>
                            <td class="file-report-view" data-bs-toggle="modal" data-bs-target="#file-report-view" data-id="{{ $file->id }}" data-file_name="{{ $file->file_name }}" data-ai="{{ $file->ai }}" data-similarity="{{ $file->similarity }}" data-plagiarism_report="{{ $file->plagiarism_report }}" data-ai_report="{{ $file->ai_report }}">{{ $file->flags !== null ? $file->flags : '-'}}</td>
                            <td >
                                @if($file->status == 0)
                                <span class="badge rounded-pill bg-warning">Processing</span>
                                @elseif($file->status == 1)
                                <span class="badge rounded-pill bg-success">Completed</span>
                                @else
                                <span class="badge rounded-pill bg-danger">Invalid File</span>
                                @endif
                            </td>
                            <td data-bs-toggle="modal" data-bs-target="#exampleModal2">{{ \Carbon\Carbon::parse($file->created_at)->setTimezone('Asia/Dhaka')->format('j M, Y h:i A') }}
                            </td>
                            <td>
                                <a href="{{ route('user.file.delete',['id'=>$file->id]) }}" id="delete" class="btn btn-sm btn-outline-danger"> Delete </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @endif

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Submit File</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('user.file.upload') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <input type="file" name="file" required>
                    </div>
                    <div class="modal-footer">
                    <button type="submit" class="btn btn-info">Submit</button>
                    </div>
                </form>
            </div>
            </div>
        </div>

        {{-- Modal 2 --}}
        <div class="modal fade" id="file-report-view" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Report</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <table class="file-details" style="padding:20px; width:100%; border-collapse:collapse;">
                    <tr>
                        <td style="padding:10px; width:30%;"><strong>File Name:</strong></td>
                        <td style="padding:10px;">
                            <a style="text-decoration:none" id="file_download_link" href="#">
                                <span id="span_file_name"></span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:10px;"><strong>Plagiarism Report:</strong></td>
                        <td style="padding:10px;">
                            <a style="text-decoration:none" id="plagiarism_download_link" href="#">
                                <span id="span_plagiarism_report"></span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:10px;"><strong>AI Report:</strong></td>
                        <td style="padding:10px;">
                            <a style="text-decoration:none" id="ai_download_link" href="#">
                                <span id="span_ai_report"></span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:10px;"><strong>AI Percentage:</strong></td>
                        <td style="padding:10px;">
                            <span id="span_ai"></span>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:10px;"><strong>Similarity:</strong></td>
                        <td style="padding:10px;">
                            <span id="span_similarity"></span>
                        </td>
                    </tr>
                </table>
            </div>
            </div>
        </div>
    </div>




    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- bootstrap js --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Start datatables -->
    {{-- <script type="text/javascript" src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script> --}}
    <!-- End datatables -->

    <script>
        // $(document).ready(function() {
        //     $('#dataTableExample').DataTable();
        // });

        $(document).on('click','.file-report-view',function(e){
            let id = $(this).data('id');
            let file_name = $(this).data('file_name');
            let plagiarism_report = $(this).data('plagiarism_report');
            let ai_report = $(this).data('ai_report');
            let ai = $(this).data('ai');
            let similarity = $(this).data('similarity');

            $('#id').val(id);
            $('#file_name').val(file_name);
            $('#plagiarism_report').val(plagiarism_report);
            $('#ai_report').val(ai_report);
            $('#ai').val(ai);
            $('#similarity').val(similarity);

            $('#span_file_name').text(file_name ? file_name : '');
            $('#span_plagiarism_report').text(plagiarism_report ? plagiarism_report : '-');
            $('#span_ai_report').text(ai_report ? ai_report : '-');
            $('#span_ai').text(ai ? ai + '%' : '-');
            $('#span_similarity').text(similarity ? similarity + '%' : '-');


            $('#file_download_link').attr('href', file_name ? `/user/file/download/${file_name}` : '#');
            $('#plagiarism_download_link').attr('href', plagiarism_report ? `/user/plagiarism/download/${plagiarism_report}` : '#');
            $('#ai_download_link').attr('href', ai_report ? `/user/ai/download/${ai_report}` : '#');
        })
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
