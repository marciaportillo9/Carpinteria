@extends('app')

@section('main-content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @include('partials/errors')
                <div class="panel panel-default">
                    <div class="panel-heading">Lista de Clientes
                        <a href="{{url('clients/create')}}" class="btn-xs btn-primary pull-right" role="button">Add</a>
                    </div>
                    <div class="panel-body">

                        <table class="table table-striped">
                            <tr>
                                <th>Nro</th>
                                <th>Name</th>
                                <th>NIT</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Actions</th>
                                <th></th>
                            </tr>
                            @foreach($clients as $client)
                                <tr>
                                    <td>{{$client->id}}</td>
                                    <td>{{$client->name}}</td>
                                    <td>{{$client->nit}}</td>
                                    <td>{{$client->email}}</td>
                                    <td>{{$client->phone}}</td>
                                    <td>{{$client->address}}</td>

                                    <td><a href="{{route('clients.edit', $client->id)}}" class="btn btn-primary">Edit</a></td>
                                    <td>
                                        {!! Form::open(['route' => ['clients.destroy', $client->id], 'method' => 'DELETE']) !!}
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                        {!! Form::close() !!}
                                    </td>

                                </tr>
                            @endforeach
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection