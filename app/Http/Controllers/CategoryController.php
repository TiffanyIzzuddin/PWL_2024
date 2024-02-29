<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function foodBaverage()
    {
        return view('category.foodBaverage')
                ->with('name', 'Food Baverage Page');
    }

    public function beautyHealth()
    {
        return view('category.beautyHealth')
                ->with('name', 'Beauty Health Page');
    }

    public function homeCare()
    {
        return view('category.homeCare')
                ->with('name', 'Home Care Page');
    }
    
    public function babyKid()
    {
        return view('category.babyKid')
                ->with('name', 'Baby Kid Page');
    }

}