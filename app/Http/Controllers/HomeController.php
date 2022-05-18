<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public static function maincategorylist(){

        return Category::where('parent_id','=' ,0)->with('children')->get();
    }

    public function index()
    {
        $sliderdata=Product::limit(3)->get();
        $categorylist=Category::limit(5)->get();
        $productlist1=Product::limit(4)->get();
        $productlist2=Product::limit(6)->get();
        return view('Myhome.index',[
            'sliderdata'=>$sliderdata,'productlist1'=>$productlist1,'categorylist'=>$categorylist,'productlist2'=>$productlist2
        ]);
    }
    public function product($id)
    {
       $data=Product::find($id);
        $images = DB::table('images')->where('product_id',$id)->get();
       return view('Myhome.product',[
          'data'=>$data,
           'images'=>$images
       ]);

    }

    public function categoryproducts($id)
    {
        $category=Category::find($id);
        $products = DB::table('products')->where('category_id',$id)->get();
        return view('Myhome.categoryproducts',[
            'category'=>$category,
            'products'=>$products
        ]);

    }




}
