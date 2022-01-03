<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $product =product::latest()->paginate(2);

        return view('product.index', compact('product'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

$request->validate([

'name'=>'required',
'price'=>'required'


]);

$product =product::create($request->all());


 return redirect()->route('product.index')->with('success','the dproducts added successusfully');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        return view('product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        return view('product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {

        $request->validate([

            'name'=>'required',
            'price'=>'required'


            ]);

            $product -> update($request->all());


             return redirect()->route('product.index')->with('success','the dproducts updated successusfully');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {

$product->delete();

        return redirect()->route('product.index')->with('success','the dproducts deleted successusfully');



    }


//softDelete


public function softDelete($id)



{

    $product =product::find($id)->delete();

    return redirect()->route('product.index')->with('success','the dproducts deleted successusfully');



}



}
