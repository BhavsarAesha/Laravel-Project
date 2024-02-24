<?php 
use App\Http\Controllers\CartController;
use App\Http\Controllers\UploadImageController;
use Illuminate\Support\Facades\DB;
?>

@extends('layout.master')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <div class="wrapper">
        <br><br><br><br><br><br><br><br><br><br><br><br>
        <h1>Foods</h1>
        @foreach($food as $image)
        <div class="project">
            <div class="shop">
                <div class="box">
                    <a href="detail/{{$image->id}}">
                        <img class="trending-image" src="{{url($image->path)}}">
                    </a>
                    <div class="content">

                        <h2>{{$image->food_name}}</h2>
                        <br>
                        <h3>Rs. {{$image->price}}</h3>
                        <p class="btn-area">
                            <i class="fa fa-trash"></i>
                            <a href="/removecart/{{$image->cart_id}}" class="btn2">Remove</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <center><a href="/order" class="button button1">Order Now</a></center>
    </div> 

@endsection
{{-- <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <div>
        <br><br><br><br><br><br><br><br><br><br><br><br>
       <div class="col-sm-10">
            <div class="trending-wrapper">
                <h2>Foods</h2>
                
                @foreach($food as $image)
                <div class="row cart-list-devider">
                    <div class="col-sm-4">
                        <a href="detail/{{$image->id}}">
                            <img class="trending-image" src="{{url($image->path)}}">
                        </a>
                    </div>
                    <div class="col-sm-4">
                            <div class="">
                                <h2>{{$image->food_name}}</h2>
                                <h3>₹ {{$image->price}}</h3>
                            </div>    
                    </div>
                    <div class="col-sm-3">
                      <a href="/removecart/{{$image->cart_id}}" class="button button4">Remove To Cart</a>
                    </div>
                </div>
                @endforeach
                <center><a href="/order" class="button button1">Order Now</a></center>
            </div>    
       </div>
    </div> --}}