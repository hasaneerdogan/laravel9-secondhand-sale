<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $sliderdata=Product::limit(3)->get();
        $categorylist=Category::limit(5)->get();
        $productlist1=Product::limit(4)->get();
        $productlist2=Product::limit(4)->get();
        return view('Myhome.index',[
            'sliderdata'=>$sliderdata,'productlist1'=>$productlist1,'categorylist'=>$categorylist,'productlist2'=>$productlist2
        ]);
    }
    public function product($id)
    {
        echo "Product id" .$id;
        exit();
        $data=Product::find($id);
        return view('Myhome.index',[
            'data'=>$data
        ]);
    }


}
