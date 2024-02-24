<?php

namespace App\Http\Controllers;


use App\Models\Cart;
use App\Models\Signup;
use App\Models\Food;
use App\Models\Order;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function add_cart(Request $request)
    {
   
        if($request->session()->has('signup'))
        {
           
           $cart = new Cart;
           $cart->user_id=$request->session()->get('signup',$request->id);
           $cart->food_id=$request->food_id;
           $cart->save();
           return redirect('/menu');
        }
        else
        {
            return redirect('/login2');
        }   
        
          
    }
    static function cartItem()
    {
        
        $userId=Session::get('signup',['id']);
        return Cart::where('user_id',$userId)->count(); 
    }

    public function cartList()
    {
        $userId=Session::get('signup',['id']);
        $food= DB::table('carts')
        ->join('food','carts.food_id','=','food.id')
        ->where('carts.user_id',$userId)
        ->select('food.*','carts.id as cart_id')
        ->get();

        return view('cart',['food'=>$food]);
    }

    public function remove_cart($id)
    {
        Cart::destroy($id);
        return redirect('cart');
    }

    public function order()
    {
        $userId=Session::get('signup',['id']);
        $total= $food= DB::table('carts')
        ->join('food','carts.food_id','=','food.id')
        ->where('carts.user_id',$userId)
        ->sum('food.price');

        return view('order',['total'=>$total]);
    }

    public function order_place(Request $request)
    {
        $userId=Session::get('signup',['id']);
        $allCart= Cart::where('user_id',$userId)->get();
        foreach($allCart as $cart)
        {
            $order= new Order;
            $order->food_id=$cart['food_id'];
            $order->user_id=$cart['user_id'];
            $order->status='pending';
            $order->payment_method=$request->payment;
            $order->payment_status='pending';
            $order->address=$request->address;
            $order->save();
            Cart::where('user_id',$userId)->delete();
        }
        $request->input();
        return redirect('/');
    }

    public function my_order()
    {
        $userId=Session::get('signup',['id']);
        $orders= DB::table('orders')
        ->join('food','orders.food_id','=','food.id')
        ->where('orders.user_id',$userId)
        ->get();

        return view('myorder',['orders'=>$orders]);
    }
}
