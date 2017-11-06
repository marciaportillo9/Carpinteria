<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Order;
use App\User;
use App\Entities\Clients;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use Styde\Html\Facades\Alert;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        return view('orders/list', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all()->pluck('name','id');
        $clients = Clients::all()->pluck('name','id');

        //dd($types);
        return view('orders/create',compact( ['products','clients']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $deliver_date = $request->deliver_date;
        $initial_payment = $request->initial_payment;
        $quantity = $request->quantity;
        $status = 1;
        $product_id= $request->product_id;
        $client_id= $request->client_id;
        $user = Auth::user();

        Order::create([
            'deliver_date' =>$deliver_date,
            'initial_payment' =>$initial_payment,
            'quantity' =>$quantity,
            'status' =>$status,
            'product_id' =>$product_id,
            'client_id' =>$client_id,
            'user_id' => $user->id,



        ])->save();

        Alert::success('Pedido Agregado');

        return redirect()->to('orders');
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
