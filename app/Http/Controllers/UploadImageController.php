<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UploadImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.image');
    }

    public function detail($id)
    {
        $data= Food::find($id);
        return view('detail',['food'=>$data]);
    }

    
    public function save(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,webp,svg|max:2048',
            'food_name' => 'required',
            'category' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $path = $file->move('uploads/gallery/', $filename);

        $save = new Food;
        $save->file_name = $filename;
        $save->path = $path;
        $save->food_name = $request->food_name;  
        $save->category = $request->category;
        $save->price = $request->price;
        $save->description = $request->description;
        $save->save();
        return redirect('/admin_dashboard')->with('status', 'Image Has Been Uploaded');
    }

    public function gallery()
    {
        $allImages = Food::all(); 
        return view('admin.gallery',compact('allImages'));
      //  return view('gallery',['foods'=>$allImages]);
    }

    public function show_gallery()
    {
        $allImages = Food::all(); 
        return view('menu',compact('allImages'));
    }


    public function a_chinese_fun()
    {
        $allImages = Food::where('category', '=', 'chinese')->get();
        return view('menu', compact('allImages'));
    }

    public function a_italian_fun()
    {
        $allImages = Food::where('category', '=', 'italian')->get();
        return view('menu', compact('allImages'));
    }

    public function a_fastfood_fun()
    {
        $allImages = Food::where('category', '=', 'fastfood')->get();
        return view('menu', compact('allImages'));
    }

    public function a_southindian_fun()
    {
        $allImages = Food::where('category', '=', 'southindian')->get();
        return view('menu', compact('allImages'));
    }

    public function a_punjabi_fun()
    {
        $allImages = Food::where('category', '=', 'punjabi')->get();
        return view('menu', compact('allImages'));
    }

    public function a_desserts_fun()
    {
        $allImages = Food::where('category', '=', 'desserts')->get();
        return view('menu', compact('allImages'));
    }

    public function a_drinks_fun()
    {
        $allImages = Food::where('category', '=', 'drinks')->get();
        return view('menu', compact('allImages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        //
    }
}
