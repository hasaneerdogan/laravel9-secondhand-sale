<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\faq;
use App\Models\Message;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $setting=Setting::first();
        return view('Myhome.index',[
            'sliderdata'=>$sliderdata,'productlist1'=>$productlist1,'categorylist'=>$categorylist,'productlist2'=>$productlist2,
            'setting'=>$setting
        ]);
    }
    public function product($id)
    {
       $data=Product::find($id);
        $images = DB::table('images')->where('product_id',$id)->get();
        $reviews=Comment::where('product_id',$id)->where('status','True')->get();
       return view('Myhome.product',[
          'data'=>$data,
           'images'=>$images,
           'reviews'=>$reviews
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
    public function about(){
        $setting=Setting::first();
        return view("Myhome.about",[
            'setting'=>$setting
        ]);
    }
    public function references(){
        $setting=Setting::first();
        return view("Myhome.references",[
            'setting'=>$setting
        ]);
    }
    public function contact(){
        $setting=Setting::first();
        return view("Myhome.contact",[
            'setting'=>$setting
        ]);
    }

    public function faq(){
        $setting=Setting::first();
        $datalist=faq::all();
        return view("Myhome.faq",[
            'setting'=>$setting,
            'datalist'=>$datalist
        ]);
    }

    public function storemessage(Request $request){
        //dd($request);
        $data = new Message();
        $data->name=$request->input('name');
        $data->email=$request->input('email');
        $data->phone=$request->input('phone');
        $data->subject=$request->input('subject');
        $data->message=$request->input('message');
        $data->ip=$request->ip();
        $data->save();

        return redirect()->route('contact')->with('info','Your message has been sent,Thank You');
    }

    public function storecomment(Request $request){
        $data = new Comment();
        $data->user_id=Auth::id();
        $data->product_id=$request->input('product_id');
        $data->subject=$request->input('subject');
        $data->review=$request->input('review');
        $data->rate=$request->input('rate');
        $data->ip=$request->ip();
        $data->save();

        return redirect()->route('product',['id'=>$request->input('product_id')])->with('info','Your review has been sent,Thank You');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function loginadmincheck(Request $request)
    {
       // dd($request);
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'error' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

}
