<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Banner;
use App\Chef;
use App\Customer;
use TCG\Voyager\Models\Page;
use TCG\Voyager\Models\Post;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::orderBy('id', 'desc')->get();

        $chefs = Chef::orderBy('id', 'desc')->get();

        $page = Page::Where(['status'=>'ACTIVE', 'slug'=>'gioi-thieu-trang-chu'])->first();
        $banners = Banner::where(['status'=> 'ACTIVE'])->get();

        $posts  =   Post::where(['status' => 'PUBLISHED' ])->latest()->get();

        $products= Product::where('status', 'ACTIVE')->limit(3)->orderBy('id', 'asc')->get();

        $products01 = Product::where(['status'=> 'ACTIVE', 'category_id' => '1'])->get();
        $products02 = Product::where(['status'=> 'ACTIVE', 'category_id' => '2'])->get();
        $products03 = Product::where(['status'=> 'ACTIVE', 'category_id' => '3'])->get();
        $products04 = Product::where(['status'=> 'ACTIVE', 'category_id' => '4'])->get();

        $productsSale = Product::where(['status'=> 'ACTIVE'])->get();

        return view('frontend.home.index')->with(compact('customers','chefs','page','banners','posts', 'products','products01','products02','products03','products04','productsSale'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

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
