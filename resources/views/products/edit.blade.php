@extends('layout')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @include('partials/errors')
                <div class="panel panel-default">
                    <div class="panel-heading">ActualizarProducto</div>
                    <div class="panel-body">

                        {!! Form::model($product, ['route' => ['products.update', $product->id], 'method' => 'PUT']) !!}

                        @include('products.partials.fields')

                        <button type="submit" class="btn btn-primary">Actualizar  Producto</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection