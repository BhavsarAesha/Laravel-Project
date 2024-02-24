<?php 
use App\Http\Controllers\CartController;
use App\Http\Controllers\UploadImageController;
use Illuminate\Support\Facades\DB;
?>

@extends('layout.master')
@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
 <div style="background-color: #ffe3e2">   
    <div class="wrapper">
        <br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="right-bar">
          <p><span>Amount</span> <span>Rs. {{$total}}</span></p>
          <hr>
          <p><span>Delivery Charge</span> <span>Rs. 10</span></p>
          <hr>
          <p><span>Taxes</span> <span>Rs. 20</span></p>
          <hr>
          <p><span>Total Amount</span> <span>Rs. {{$total+30}}</span></p>
          <hr>
          <a href="/pdf" style="font-size: 25px">Generate Bill</a>
        </div>
    </div>
        <br><br>
      <center>  <form action="/orderplace" method="POST" style="border: solid 1px; border-radius: 2px; backgroung-colour: white; box-shadow: 5px 4px 5px 4px; width: 350px;">
          @csrf
          
         <div class="form-row" >
              <div class="form-group">
                  <label for="inputAddress" style="font-size: 25px">Address</label>
                  <textarea  class="form-control" name="address" placeholder="Enter Your Address" rows="2" cols="20" style=" width: 300px; height: 150px;font-size:20px;"></textarea>
              </div>
              <center>
                <div class="form-group">
                  <label for="payment" style="font-size: 25px; ">Payment Method</label>
                  <select id="payment" name="payment" class="form-control" style=" width: 300px; height: 50px;font-size:20px;">
                  <option selected value="cash" name="payment">Cash On Delivery</option>
                  <option selected value="cash" name="payment">Online Payment</option>
                  <option selected value="cash" name="payment">EMI Payment</option>
                  <option selected>...</option>
                  </select>
              </div>
            </center>
            
          </div>
          <br> <br> <br>  
          <button type="submit" style="font-size: 25px; margin-bottom: 5px;background-color:aquamarine">Submit</button>
          
        </form></center>
        <br><br><br>
    </div>

    </div> 
@endsection

