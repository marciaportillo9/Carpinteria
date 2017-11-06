<?php

namespace App\Http\Controllers;

use App\Entities\Clients;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Styde\Html\Facades\Alert;

class ClientsController extends Controller
{

    public function index()
    {
        $clients=Clients::all();
        return view('clients/list', compact('clients'));
    }


    public function create()
    {
        return view('clients/create');
    }

    public function store(Request $request)
    {
        //return 'Creating a client';
        //protected $fillable = ['name', 'nit', 'email','phone', 'address' ];
        $name = $request->name;
        $nit = $request -> nit;
        $email = $request -> email;
        $phone = $request -> phone;
        $address = $request -> address;


        Clients::create([
            'name' => $name,
            'nit' => $nit,
            'email' => $email,
            'phone' => $phone,
            'address' => $address
        ])->save();

        Alert::success('Cliente Agregado');

        return redirect()->to('clients');
    }

    public function show($client)
    {
        dd($client);
    }

    public function edit($id)
    {
        $client = Clients::findOrFail($id);
        return view('clients.edit', compact('client'));
    }


    public function update(Request $request, $id)
    {
        $this->validate(request(), [
            'name' => 'required',
            'nit' => 'required',
            'email' => 'required',
            'phone' =>'required',
            'address' => 'required'
        ]);

        $client = Clients::findOrFail($id);
        $client->fill(request()->all());
        $client->save();

        Alert::success('Cliente:  '. $client->name . ' fue actualizado');
        return redirect()->to('clients');
    }

    public function destroy($id)
    {
        $client = Clients::findOrFail($id);
        $client->delete();

        Alert::success('Cliente: '. $client->name . ' fue eliminado');

        return redirect()->to('clients');
    }
}
