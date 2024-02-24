@extends('admin.admin_layout.master')
@section('content_admin')
{{-- <!DOCTYPE html>
<html lang="en">
<head> --}}
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <style>
        table, th, td{
            border: 1px solid black;
            border-radius: 20px;
            padding: 10px;
            text-align: center;
        }
       
        </style>
{{-- </head> --}}
<body>
    <div style="background-color: #ffe3e2">
    <center><table>
        <tbody>
            <tr>
                <th colspan="6">AUTHORIZED USERS</th>
            </tr>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Mobile</th>
                <th>Is Admin</th>
                <th>Actions</th>
            </tr>
            @foreach($allRecords as $rec)
                <tr>
                    <td>{{$rec['name']}}</td>
                    <td>{{$rec['email']}}</td>
                    <td>{{$rec['password']}}</td>
                    <td>{{$rec['mobile']}}</td>
                    <td>{{$rec['id'] == '1' ? 'Yes' : 'No'}}</td>
                    
                    <td><a href="{{url('edit/'.$rec->id)}}" class="btn btn-primary">Edit</a> 
                        &nbsp;
                        <a href="{{url('del/'.$rec->id)}}" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
        </tbody>
    </table></center>
    </div>
</body>
</html>
@endsection