@extends('app')

@section('main-content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @include('partials/errors')
                <div class="panel panel-default">
                    <div class="panel-heading">Lista de Tipo de Productos
                        <a href="{{url('product-types/create')}}" class="btn-xs btn-primary pull-right" role="button">Add</a>
                    </div>
                    {!! Alert::render() !!}
                    <div class="panel-body">

                        <table class="table table-striped">
                            <tr>
                                <th>Nro</th>
                                <th>Type Name</th>
                                <th>Details</th>
                                <th>Actions</th>
                                <th></th>
                            </tr>
                            @foreach($types as $type)
                                <tr>
                                    <td>{{$type->id}}</td>
                                    <td>{{$type->name}}</td>
                                    <td>{{$type->details}}</td>
                                    <td><a href="{{route('product-types.edit', $type->id)}}" class="btn btn-primary">Edit</a></td>
                                    <td>
                                        {!! Form::open(['route' => ['product-types.destroy', $type->id], 'method' => 'DELETE']) !!}
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