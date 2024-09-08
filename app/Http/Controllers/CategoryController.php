<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function foodbeverage(){
        return view('blog.foodbeverage')
        ->with('category','Food and Baverage');
    }
    
    public function beautyhealth(){
        return view('blog.beautyhealth')
        ->with('category','Beauty and Health');
    }
    
    public function homecare(){
        return view('blog.homecare')
        ->with('category','Home and Care');
    }
    
    public function babykid(){
        return view('blog.babykid')
        ->with('category','Baby and Kit');
    }
    
}
