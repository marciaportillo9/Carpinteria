@extends('layout')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @include('partials/errors')
                <div class="panel panel-default">
                    <div class="panel-heading">Agregar Producto</div>
                    <div class="panel-body">

                        {!! Form::open(['route' => 'products.store', 'method' => 'POST']) !!}

                        @include('products.partials.fields')

                        <button type="submit" class="btn btn-primary">Crear Producto</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection