@extends('admin.admin_layout.master')
@section('content_admin')
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <style>
        table, th, td{
            border: 1px solid black;
            border-radius: 20px;
            padding: 15px;
            text-align: center;
        }
       
        </style>
        <div style="background-color: #ffe3e2">
        <center>
<table>
    <tbody>
        <tr>
            <th colspan="6">USERS FEEDBACK</th>
        </tr>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Message</th>
        </tr>
        @foreach($allContacts as $con)
            <tr>
                <td>{{$con['firstname']}}</td>
                <td>{{$con['lastname']}}</td>
                <td>{{$con['email']}}</td>
                <td>{{$con['mobile']}}</td>
                <td>{{$con['msg']}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
        </center>
        <br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
@endsection