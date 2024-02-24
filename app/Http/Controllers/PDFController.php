<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Signup;
use App\Models\Food;
use App\Models\Order;

use Session;
use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\DB;

class PDFController extends Controller
{
    public function pdf_fun()
    {
        $userId=Session::get('signup',['id']);
        $total= $food= DB::table('carts')
        ->join('food','carts.food_id','=','food.id')
        ->where('carts.user_id',$userId)
        ->sum('food.price');
        
        $pdf = PDF::loadView('myPDF',['total'=>$total]);

        //$pdf = PDF::loadView('myPDF');
        return $pdf->download('bill.pdf');
    }
}
