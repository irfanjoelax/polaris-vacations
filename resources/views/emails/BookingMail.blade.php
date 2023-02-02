<!DOCTYPE html>
<html>

<head>
    <title>ItsolutionStuff.com</title>
</head>

<body>
    <h1>New Booking</h1>
    <h4>Notification for new booking your Paket in {{ env('APP_NAME') }}, please see details:</h4>
    <table width="100%">
        <tr>
            <td width="13%">Name</td>
            <td width="2%">:</td>
            <td width="85%">{{ $data['name'] }}</td>
        </tr>
        <tr>
            <td width="13%">Email</td>
            <td width="2%">:</td>
            <td width="85%">{{ $data['email'] }}</td>
        </tr>
        <tr>
            <td width="13%">Phone</td>
            <td width="2%">:</td>
            <td width="85%">{{ $data['phone'] }}</td>
        </tr>
        <tr>
            <td width="13%">Type</td>
            <td width="2%">:</td>
            <td width="85%">{{ $data['type'] }}</td>
        </tr>
        <tr>
            <td width="13%">Message</td>
            <td width="2%">:</td>
            <td width="85%">{{ $data['message'] }}</td>
        </tr>
    </table>

    <p>for Details please click this link: {{ url('/admin/bookings') }}</p>
</body>

</html>
