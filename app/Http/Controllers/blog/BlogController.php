<?php

namespace App\Http\Controllers\blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
     {  $blogs=\App\Models\blog::all();
            $categories=\App\Models\category::all();

         return view('dashboard.blog',compact('blogs','categories'));
     }  

     public function store(Request $request )
     { 
        // $validatedData = $request->validate([
        // 'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',

        // ]);

        //  $name = $request->file('image');

 
        // $path = $request->file('image')->store('public/image');
 
         \App\Models\blog::create([

            'user_id'=>auth()->user()->id,
            'category_id'=>$request->get('category_id'),
            'title'=>$request->get('title'),
            'contents'=>$request->get('contents'),
            'image'=>$request->get('image'),
            'views'=>$request->get('views'),
            'description'=>$request->get('description'),
            
        ]);



         return back();

     }
     
}
