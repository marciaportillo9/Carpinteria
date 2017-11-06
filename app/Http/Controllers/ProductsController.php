<?php

namespace App\Http\Controllers;

use App\Entities\ProductType;
use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Styde\Html\Facades\Alert;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('products/list', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = ProductType::all()->pluck('name','id');
        //dd($types);
        return view('products/create', compact('types'));

    }

        public function store(Request $request)
    {
        //protected $fillable = ['name', 'quantity', 'unit_price', 'state', 'details', 'product_types_id'];
        $name = $request->name;
        $quantity = $request->quantity;
        $unit_price = $request->unit_price;
        $state = $request->state;
        $details = $request->details;
        $product_types_id= $request->product_types_id;


        Product::create([
            'name' => $name,
            'quantity' => $quantity,
            'unit_price' => $unit_price,
            'state' => $state,
            'details' => $details,
            'product_types_id' => $product_types_id
        ])->save();

        Alert::success('Producto Agregado');

        return redirect()->to('products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($product)
    {
        dd($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $types = ProductType::all()->pluck('name','id');

        $product = Product::findOrFail($id);
        return view('products.edit', compact('product','types'));
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
        //protected $fillable = ['name', 'quantity', 'unit_price', 'state', 'details', 'product_types_id'];
        $this->validate(request(), [
            'name' => 'required',
            'quantity' => 'required',
            'unit_price' => 'required',
            'state' =>'required',
            'details' => 'required',
            'product_types_id' => 'required'
        ]);

        $product = Product::findOrFail($id);
        $product->fill(request()->all());
        $product->save();

        Alert::success('Producto:  '. $product->name . ' fue actualizado');
        return redirect()->to('products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        Alert::success('Producto: '. $product->name . ' fue eliminado');

        return redirect()->to('products');
    }
}
