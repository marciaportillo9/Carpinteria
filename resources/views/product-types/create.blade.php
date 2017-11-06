@extends('app')

@section('main-content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @include('partials/errors')
                <div class="panel panel-default">
                    <div class="panel-heading">Agregar Tipo de Producto</div>
                    <div class="panel-body">

                        {!! Form::open(['route' => 'product-types.store', 'method' => 'POST']) !!}

                        {!! Form::label('name', 'Product Name') !!}
                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Escribe el nombre del producto aqui']) !!}

                        {!! Form::label('details', 'Details') !!}
                        {!! Form::text('details', null, ['class' => 'form-control', 'placeholder' => 'Escribe el nombre del producto aqui']) !!}

                        <button type="submit" class="btn btn-primary">Crear Tipo de Producto</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection