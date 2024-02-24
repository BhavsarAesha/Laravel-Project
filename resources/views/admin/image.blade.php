@extends('admin.admin_layout.master')
@section('content_admin')
@if(session('status'))
{{session('status')}}
@endif
<div style="background-image:url('donut.jpeg');"height:100vh;
background-size: 100% 100%;
background-position: center;>
<form method="POST" 
        enctype="multipart/form-data" 
        id="upload-image" 
        action="{{url('save_image')}}">
    @csrf
    <div style="margin-left:50px;">
    <label style="font-size:25px;">Select Food Image File: </label><br><br>
    <input type="file" name="image" placeholder="choose image" id="image" style="size: 20px;">
    @error('image')
    <div class="alert alert-danger mt-1 mb-1">
        {{$message}}
    </div>
    @enderror
    <br><br>

    <label style="font-size:25px;">Food Name : </label><br>
    <input type="text" name="food_name" placeholder="Food" style="size: 20px;">
    @error('food_name')
    <div class="alert alert-danger mt-1 mb-1">
        {{$message}}
    </div>
    @enderror
    <br><br>
    <label style="font-size:25px;">Category : </label><br>
    <!-- <input type="text" name="category" placeholder="Chinese" style="size: 20px;"> -->
    <select name="category" style="size: 20px;">
        <option value = "chinese" selected>Chinese</option>
            <option value = "italian" selected>Italian</option>
            <option value = "fastfood" selected>Fast Food</option>
            <option value = "southindian" selected>South Indian</option>
            <option value = "punjabi" selected>Punjabi</option>
            <option value = "desserts" selected>Desserts</option>
            <option value = "drinks" selected>Drinks</option>
    </select>
    @error('category')
    <div class="alert alert-danger mt-1 mb-1">
        {{$message}}
    </div>
    @enderror
    <br><br>
    <label style="font-size:25px;">Price : </label><br>
    <input type="text" name="price" placeholder="Add price" style="size: 20px;">
    @error('price')
    <div class="alert alert-danger mt-1 mb-1">
        {{$message}}
    </div>
    @enderror
    <br><br>
    <label style="font-size:25px;">Description : </label><br>
    <input type="text" name="description" placeholder="Add description" style="size: 20px;">
    @error('description')
    <div class="alert alert-danger mt-1 mb-1">
        {{$message}}
    </div>
    @enderror
    <br><br>
    <button type="submit" class="btn btn-primary button" id="submit">Add Food</button>
    </div>
    </form>
    <br>
    <br>
    <br>
    <br>
    <br>
</div>
    @endsection