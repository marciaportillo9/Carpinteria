@extends('app')

@section('main-content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @include('partials/errors')
                <div class="panel panel-default">
                    <div class="panel-heading">Agregar Tipo de Producto</div>
                    <div class="panel-body">

                        {!! Form::model($type, ['route' => ['product-types.update', $type->id], 'method' => 'PUT']) !!}

                        @include('product-types.partials.fields')

                        <button type="submit" class="btn btn-primary">Actualizar Tipo de Producto</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection