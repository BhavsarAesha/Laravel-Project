<?php 
use App\Http\Controllers\CartController;
$total=0;
if(Session::has('signup'))
{
	$total= CartController::cartItem();
}

?>
<header>
	<div class="main">
		<div class="logo">
			<img src="home.png" class="img11">
		</div>
		<ul class="ul1">
			<li class="li1"><a href="/" class="a1">HOME</a></li>
			<li class="li1"><a href="/menu" class="a1">MENU</a></li>
			<li class="li1"><a href="/contact" class="a1">CONTACT US</a></li>
			<li class="li1"><a href="/cart" class="a1">CART({{$total}})</a></li>
			<li class="li1"><a href="/myorder" class="a1">ORDER</a></li>
		</ul>
</div>
</header>
