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
        <h1>MY ORDERS</h1>
        @foreach($orders as $image)
        <div class="project">
            <div class="shop">
                <div class="box">
                    <a href="detail/{{$image->id}}">
                        <img class="" src="{{url($image->path)}}">
                    </a>
                    <div class="content">
                        <h3>Name : {{$image->food_name}}</h3>
                        <h4>Delievery Status : {{$image->status}}</h4>
                        <h4>Payment Method : {{$image->payment_method}}</h4>
                        <h4>Payment Status : {{$image->payment_status}}</h4>
                        <h4>Address : {{$image->address}}</h4>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div> 
@endsection
{{-- <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <div>
        <br><br><br><br><br><br><br><br><br><br><br><br>
       <div class="col-sm-10">
            <div class="trending-wrapper">
                <h2>MY ORDERS</h2>
                
                @foreach($orders as $image)
                <div class="row cart-list-devider">
                    <div class="col-sm-4">
                        <a href="detail/{{$image->id}}">
                            <img class="trending-image" src="{{url($image->path)}}">
                        </a>
                    </div>
                    <div class="col-sm-4">
                            <div class="">
                                <h3>Name : {{$image->food_name}}</h3>
                                <h4>Delievery Status : {{$image->status}}</h4>
                                <h4>Payment Method : {{$image->payment_method}}</h4>
                                <h4>Payment Status : {{$image->payment_status}}</h4>
                                <h4>Address : {{$image->address}}</h4>                                                               
                            </div>    
                    </div>
                </div>
                @endforeach
                
            </div>    
       </div>
    </div> --}}