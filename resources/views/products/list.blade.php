@extends('app')

@section('main-content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @include('partials/errors')
                <div class="panel panel-default">
                    <div class="panel-heading">Lista de Productos
                        <a href="{{url('products/create')}}" class="btn-xs btn-primary pull-right" role="button">Add</a>
                    </div>
                    <div class="panel-body">

                        <table class="table table-striped">
                            <tr>
                                <th>Nro</th>
                                <th>Product Name</th>
                                <th>Cantidad</th>
                                <th>Unit Price</th>
                                <th>State</th>
                                <th>Details</th>
                                <th>Product Type</th>
                                <th>Actions</th>
                                <th> </th>
                            </tr>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->quantity}}</td>
                                    <td>{{$product->unit_price}}</td>
                                    <td>{{$product->state}}</td>
                                    <td>{{$product->details}}</td>
                                    <td>{{$product->product_types_id}}</td>

                                    <td><a href="{{route('products.edit', $product->id)}}" class="btn btn-primary">Edit</a></td>
                                    <td>
                                        {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'DELETE']) !!}
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