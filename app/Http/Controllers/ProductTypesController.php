<?php

namespace App\Http\Controllers;

use App\Entities\ProductType;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Styde\Html\Facades\Alert;

class ProductTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = ProductType::all();
        return view('product-types/list', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product-types/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->name;
        $details = $request->details;

        ProductType::create([
            'name' => $name,
            'details' => $details
        ])->save();

        Alert::success('Tipo de Producto Agregado');

        return redirect()->to('product-types');
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
        $type = ProductType::findOrFail($id);
        return view('product-types.edit', compact('type'));
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
        $this->validate(request(), [
            'name' => 'required',
            'details' => 'required'
        ]);

        $type = ProductType::findOrFail($id);
        $type->fill(request()->all());
        $type->save();

        Alert::success('Tipo de Producto '. $type->name . ' fue actualizado');
        return redirect()->to('product-types');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type = ProductType::findOrFail($id);
        $type->delete();

        Alert::success('Tipo de producto '. $type->name . ' fue eliminado');

        return redirect()->to('product-types');
    }
}
