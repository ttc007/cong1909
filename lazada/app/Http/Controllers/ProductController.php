<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Industrys;
use App\Categorys;
use App\Trademarks;

class ProductController extends Controller
{
    public function home()
    {
    	$industry_all=Industrys::all();
    	$product_all=Products::all();
    	$category_all=Categorys::all();
    	$trademark_all=Trademarks::all();
        return view('master') ->with('product_all',$product_all)
        					  ->with('industry_all',$industry_all)
        					  ->with('category_all',$category_all)
        					  ->with('trademark_all',$trademark_all);
    }
}
