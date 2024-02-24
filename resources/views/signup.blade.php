<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=>, initial-scale=1.0">
    <title>SIGN UP</title>
    <style>
        body{
            background-image:url(f3.jpg);
            height:100%;
            width:100%;
            background-size:cover;
            background-position:center;
            transition: 0.6 ease;
        }
        .box{
            width:320px;
            border:2px white;
            margin :30px;
        }
        .button {
            border: none;
            color: black;
            padding: 10px 28px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }   
        .button1 {background-color: #4CAF50;}
    </style>
</head>
<body>

    <div>
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
        @endif
    </div>
    <form name="myform" action="{{route('store_aesha')}}" method="post">
        
    @csrf
    <div class="box">
    <h1 style="color: brown; font-size:50px;">SIGN UP</h1>
    
    <p style="font-size:30px">Name:<br><input type="name" name="name" id="name" placeholder="Enter your name"></p>
	<p style="font-size:30px">Email:<br><input type="email" name="email" id="email" placeholder="Write your email@"></p>
    <p style="font-size:30px">Password:<br><input type="password" name="password" id="password" placeholder="Enter your password"></p>
    <p style="font-size:30px">Mobile Number:<br><input type="text" name="mobile" id="mobile" placeholder="Enter your number" pattern="[0-9]{5}[0-9]{5}"></p>
    
    <button type="submit" class="button button1">Submit</button><br>
    </div>
</form>

</body>
</html>