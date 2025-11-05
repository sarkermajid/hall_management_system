<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Student Approved Successfully</title>
</head>

<body>
    <p>Dear {{ $name }},</p>

    <p>We are pleased to inform you that your account has been <strong>Approved</strong> in our Hostel Management System.
       You can now log in and access your assigned hall and room. Below are your login credentials:</p>

    <table style="border-collapse: collapse;">
        <tr>
            <td style="padding: 5px; font-weight: bold;">Login URL:</td>
            <td style="padding: 5px;">{{ $url }}</td>
        </tr>
        <tr>
            <td style="padding: 5px; font-weight: bold;">Email:</td>
            <td style="padding: 5px;">{{ $email }}</td>
        </tr>
        <tr>
            <td style="padding: 5px; font-weight: bold;">Password:</td>
            <td style="padding: 5px;">{{ $password }}</td>
        </tr>
    </table>

    <p>Please use these credentials to log in and manage your responsibilities in the hostel. We recommend changing your
       password after your first login for security purposes.</p>

    <p>Best regards,<br>
       <strong>Hostel Management System</strong></p>
</body>

</html>
