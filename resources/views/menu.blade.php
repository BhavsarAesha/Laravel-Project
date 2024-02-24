@extends('layout.master')
@section('content')
<div style="background-color: #ffe3e2"> 
<br><br><br><br><br><br><br><br><br><br><br><br>

<header>
    <ul class="ul1">
        {{-- <li class="li1">
            <a href="#">All Foods</a>
        </li> --}}
        <li class="li1"><a href="a_chinese" class="a1">Chinese</a></li>
        <li class="li1"><a href="a_italian" class="a1">Italian</a></li>
        <li class="li1"><a href="a_fastfood" class="a1">Fast Food</a></li>
        <li class="li1"><a href="a_southindian" class="a1">South Indian</a></li>
        <li class="li1"><a href="a_punjabi" class="a1">Punjabi</a></li>
        <li class="li1"><a href="a_desserts" class="a1">Desserts</a></li>
        <li class="li1"><a href="a_drinks" class="a1">Drinks</a></li>
    </ul>
</header>
<br><br><br><br>
<div class="slideshow-container">

    <div class="mySlides fade img1">
      <img src="choco_peanuts_cone.jpg" style="width:100%">
    </div>
  
    <div class="mySlides fade img1">
      <img src="ffood.jpg" style="width:100%">
    </div>          
  
    </div>
    <br>
  
    <div style="text-align:center">
      <span class="dot"></span> 
      <span class="dot"></span> 
    </div>
  
    <script>
     let slideIndex = 0;
     showSlides();
  
    function showSlides() {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}    
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
    </script>
<div class="myTable">
    <table cellspacing="40" style="padding:45px;margin-left:30px">
        <tbody>
            <?php $i = -1; ?>
            @foreach($allImages as $image)
            <?php 
                $i++;
                if ($i % 5 == 0)
                {
                    ?><tr><?php
                }
            ?>
                <td>
                    <a href="detail/{{$image['id']}}">
                    <img 
                        src="{{$image->path}}" 
                        height='190px' 
                        width='220px' 
                        style="border-style:solid;padding:25px">
                        <hr>
                        <h4 style="text-align:center;">{{$image->food_name}}</h4>
                        <h4 style="text-align:center;">Rs. {{$image->price}}</h4>
                    </a>
                </td>
            @endforeach
        </tbody>
    </table>
    <br>
    <a href="/">Back</a>
</div>
 </div>
@endsection
