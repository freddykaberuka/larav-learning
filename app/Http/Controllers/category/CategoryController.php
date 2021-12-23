<?php

namespace App\Http\Controllers\category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
   public function index()
     {  $categories=\App\Models\category::all();

         return view('dashboard.category',compact('categories'));
     }  

     public function store(Request $request )
     {
         \App\Models\category::create([
            
            'name'=>$request->get('name'),
            'status'=>1,
        ]);

         return back();

     }
     
}
