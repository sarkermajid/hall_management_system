<!DOCTYPE html>
<html>

<head>
    <title>Hostel Invoice</title>
    <style>
        body {
            font-family: sans-serif;
            font-size: 14px;
            margin: 0;
            padding: 0;
        }

        .invoice-container {
            width: 600px;
            margin: 20px auto;
            padding: 25px;
            border: 1px solid #000;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h2,
        .header h4 {
            margin: 3px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        .table-section {
            margin-top: 15px;
        }

        .table-section td {
            padding: 6px;
            border: 1px solid #000;
        }

        .section-title {
            font-weight: bold;
            background: #e9e9e9;
            padding: 6px;
            border: 1px solid #000;
            margin-top: 25px;
        }

        .signature {
            margin-top: 50px;
            text-align: right;
            font-size: 14px;
        }

        .signature .line {
            width: 200px;
            border-top: 1px solid #000;
            float: right;
            margin-bottom: 5px;
        }
    </style>
</head>

<body>

    <div class="invoice-container">

        <!-- Header -->
        <div class="header">
            <h2>Hostel Management System</h2>
            <h4>Official Accomodation Receipt & Allocation Invoice</h4>
        </div>

        <!-- Applicant Info -->
        <div class="section-title">Student Information</div>
        <table class="table-section">
            <tr>
                <td><strong>Name:</strong> {{ $user->name }}</td>
                <td><strong>Reg No:</strong> {{ $user->reg_no }}</td>
            </tr>
            <tr>
                <td><strong>Email:</strong> {{ $user->email }}</td>
                <td><strong>Phone:</strong> {{ $user->phone }}</td>
            </tr>
            <tr>
                <td colspan="2"><strong>Department:</strong> {{ $user->department }}</td>
            </tr>
        </table>

        <!-- Hostel Info -->
        <div class="section-title">Hall & Room Information</div>
        <table class="table-section">
            <tr>
                <td><strong>Hall:</strong> {{ $user->Halls->name ?? 'N/A' }}</td>
                <td><strong>Room:</strong> {{ $user->room->room_number ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td><strong>Status:</strong>
                    {{ $user->status == 2 ? 'Approved' : 'Pending' }}
                </td>
                <td><strong>Allocation Date:</strong> {{ $user->updated_at->format('d M, Y') }}</td>
            </tr>
        </table>

        <!-- Signature -->
        <div class="signature">
            <strong>Authority</strong><br>
            Hostem Management System
            {{-- {{ $user->Halls->provost_name ?? 'Authorized Person' }} --}}
        </div>

    </div>

</body>

</html>
