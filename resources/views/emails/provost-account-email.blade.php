<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Provost Account Created</title>
</head>

<body>
    <p>Dear Provost, {{ $name }}</p>

    <p>We are pleased to inform you that you have been assigned as a Provost in our Hostel Management System. Below are
        your login credentials:</p>

    <table style="border-collapse: collapse;">
        <tr>
            <td style="padding: 5px; font-weight: bold;">Email:</td>
            <td style="padding: 5px;">{{ $email }}</td>
        </tr>
        <tr>
            <td style="padding: 5px; font-weight: bold;">Password:</td>
            <td style="padding: 5px;">{{ $password }}</td>
        </tr>
    </table>

    <p>Please use these credentials to log in to your account and manage your responsibilities.</p>
    <p>Best regards,<br>
        Hostel Management System</p>
</body>

</html>
