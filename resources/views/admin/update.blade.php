


<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=>, initial-scale=1.0">

<link rel="stylesheet" type="text/css" href="{{url('login_page.css')}}">
<title>Update User</title>
<style>
    .button {
        border: solid;
        color: black;
        padding: 10px 28px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }
</style>
</head>

<body>
    <form name="myform" action="{{url('update/'.$rec->id )}}" method="post">

        @csrf
        <div class="box">
            <h1 style="color: brown; font-size:40px;">UPDATE FORM</h1>
            <p style="font-size:30px">Name:<br><input type="name" name="name" id="name" value="{{$rec->name}}"></p>
            <p style="font-size:30px">Email:<br><input type="email" name="email" id="email" placeholder="write your email@" value="{{$rec->email}}"></p>
            <p style="font-size:30px">Mobile Number:<br><input type="text" name="mobile" id="mobile" placeholder="Enter your number" pattern="[0-9]{5}[0-9]{5}" value="{{$rec->mobile}}"></p>
            <button type="submit" class="button button1">Update</button><br>
        </div>
    </form>
