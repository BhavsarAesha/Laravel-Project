<?php 
use App\Http\Controllers\SignUpController;
?>
@extends('layout.master')
@section('content')
<div class="header11">
        <br><br><br><br><br><br><br><br><br><br><br><br><br>
        @if(Session::has('signup'))
        <p class="white">Welcome <p class="white">{{Session::get('signup_name')}} 
        <div class="title">   
                <br>
                <a href="/logout" class="a1">LOG OUT</a>
        </div>
        @else
        <div class="title">   
                <br>
                <a href="/signup" class="a1">SIGN UP</a> 
                <a href="/login2" class="a1">LOG IN</a>
        </div>
        @endif
</div>
@endsection