@extends('layout.master')
@section('content')
<div style="background-color: #ffe3e2">
<br><br><br><br><br><br><br><br><br><br><br><br>
<div class="container11">
    
    <div>
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
        @endif
    </div>
    <form class="form11" action="{{route('c_aesha')}}" method="POST"> 
        @csrf
        <h1 class="h11">Contact Us Form</h1>
        <br><br>
        <input class="input11" type="text" id="firstname" name="firstname" placeholder="First Name">
        <input class="input11" type="text" id="lastname" name="lastname" placeholder="Last Name">
        <input class="input11" type="email" id="email" name="email" placeholder="Email">
        <input class="input11" type="text" id="mobile" name="mobile" placeholder="Mobile">
        <h4 class="h44">Type Your Message Here...</h4>
        <textarea name="msg"></textarea>
        <input class="input11" type="submit" id="button" value="send">
    </form>
</div>
</div>
@endsection
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

.container11{
    min-height: 100vh;
    background: #08071d;
    display: flex;
    justify-content: center;
    align-items: center;
    background: url("choco_peanuts_cone.jpg") no-repeat center center/cover;
    
}

.container11 .form11{
    width: 670px;
    height: 400px;
    display: flex;
    justify-content: center;
    box-shadow: 20px 20px 50px rgba(0,0,0,0.5);
    border-radius: 15px;
    background: rgba(255,255,255,0.1);
    backdrop-filter: blur(10px);
    flex-wrap: wrap;
}

.container11 .form11 .h11{
    color: #fff;
    font-weight: 500;
    margin-top: 20px;
    width: 500px;
    text-align: center;
}

.container11 .form11 .input11{
    width: 290px;
    height: 40px;
    padding-left: 10px;
    outline: none;
    border: none;
    font-size: 15px;
    margin-bottom: 10px;
    background: none;
    border-bottom: 2px solid #fff;
}

.container11 .form11 .input11::placeholder{
    color: #ddd;
}

.container11 .form11 #lastName,
.container11 .form11 #mobile{
    margin-left: 20px;
}

.container11 .form11 .h44{
    color: #fff;
    font-weight: 300;
    width: 600px;
    margin-top: 20px;
}

.container11 .form11 textarea{
    background: none;
    border: none;
    border-bottom: 2px solid #fff;
    color: #fff;
    font-weight: 200;
    font-size: 15px;
    padding: 10px;
    outline: none;
    min-width: 600px;
    max-width: 600px;
    min-height: 80px;
    max-height: 80px;
}

textarea::-webkit-scrollbar{
    width: 1em;
}

textarea::-webkit-scrollbar-thumb{
    background-color: rgba(194,194,194,0.713);
}

.container11 .form11 #button{
    border: none;
    background: #fff;
    border-radius: 5px;
    margin-top: 20px;
    font-weight: 600;
    font-size: 20px;
    color: #333;
    width: 100px;
    padding: 0;
    margin-right: 500px;
    margin-bottom: 30px;
    transition: 0.3s;
}

.container11 .form11 #button:hover{
    opacity: 0.7;
}
</style>