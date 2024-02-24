<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <style>
        .box1{
                width: 650px;
                height: 650px;
                border: 5px solid black;
                margin-left:28%;
                
            }
        .button{
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
        .button1 {
            background-color: #4CAF50;
        }
        .button2{
            background-color: blue;
        }
        .di{
           opacity: 0.5;
        }
        body{
            background-image: url('http://www.pixelstalk.net/wp-content/uploads/2016/07/Cute-Ice-Cream-Background-Free-Download.jpg');
            height:100vh;
             background-size: 100% 100%;
             background-position: center;
        }
        </style>
</head> 
<body>
    
<a href='/menu'>Back</a>
<div class="box1">&nbsp
    <div>
        &nbsp<img src="{{url($food['path'])}}"
        height='220px' 
        width='250px' 
        style="border-style:solid;padding:0px">
    </div>

    <div class="">
        <h1><b>{{$food['food_name']}}</b></h1>
        <h2><b>Price : </b>Rs. {{$food['price']}}</h2>
        <h2><b>Category : </b>{{$food['category']}}</h2>
        <h2><b>Description : </b>{{$food['description']}}</h2>
            <br>
                <form action="/addcart" method="POST">
                    @csrf
                    <input type="hidden" name="food_id" value="{{$food['id']}}">
                &nbsp<button class="button button1">Add To Cart</button>
                </form>
            <br>
            &nbsp<a href="/order" class="button button2">Order Now</a>
    </div>
</div>
</body>
</html>