<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.homepage');
    }

    //to service
    public function service()
    {
        return view('user.service');
    }

    //to about
    public function about(){
        return view('user.about');
    }
    //to contact
    public function contact(){
        return view('user.contact');
    }
    //to team
    public function team(){
        return view('user.team');
    }
    //to blog
    public function blog()
    {
        return view('user.blog');
    }
    //to pricing
    public function pricing()
    {
        return view('user.pricing');
    }
    //to product
    public function product()
    {
       $showproduct=product::orderBy('id','desc')->get();
       return view('user.product',['showproduct'=>$showproduct]);
    }

     public function productdetail($id){
     $detail=Product::find($id);

     $recent=Product::orderBy('id','desc')->limit(5)->get();

     return view('user.productdetail',compact('detail','recent'));
    }

//for search

    public function search(Request $request){
        $searchitem=$request->get('search');
        $result=Product::orderBy('id','desc')->where('product_name','like','%'.$searchitem.'%')->get();
        return view('user.searchproduct',['result'=>$result]);
    }

    // /**
  
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
