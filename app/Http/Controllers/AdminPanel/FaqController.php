<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\faq;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=faq::all();
        return view('Myadmin.faq.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=faq::all();
        return view('Myadmin.faq.create',['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= new faq();
        $data->question=$request->question;
        $data->answer=$request->answer;
        $data->status=$request->status;
        $data->save();
        return redirect(route('admin.faq.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=faq::find($id);
        return view('Myadmin.faq.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=faq::find($id);
        return view('Myadmin.faq.edit',['data'=>$data ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param \App\Models\faq $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=faq::find($id);
        $data->question=$request->question;
        $data->answer=$request->answer;
        $data->status=$request->status;
        $data->save();
        return redirect(route('admin.faq.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=faq::find($id);
        $data->delete();
        return redirect(route('admin.faq.index'));
    }
}
