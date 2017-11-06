@extends('app')

@section('main-content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @include('partials/errors')
                <div class="panel panel-default">
                    <div class="panel-heading">Agregar Pedido</div>
                    <div class="panel-body">

                        {!! Form::open(['route' => 'orders.store', 'method' => 'POST']) !!}
                        

                        <div class="form-group">
                            {!! Form::label('product_id', 'Product') !!}
                            {!! Form::select('product_id', $products, null, ['placeholder' => 'Seleccione el producto aqui']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('client_id', 'Clients') !!}
                            {!! Form::select('client_id',$clients, null, ['placeholder' => 'Seleccione el Cliente aqui']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('deliver_date', 'Deliver Date') !!}
                            {!! Form::date('deliver_date', null, ['class' => 'form-control', 'placeholder' => 'Escribe la fecha de entrega']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('initial_payment', 'Initial Payment') !!}
                            {!! Form::text('initial_payment', null, ['class' => 'form-control', 'placeholder' => 'Escribe el monto del primer pago']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('quantity', 'Quantity') !!}
                            {!! Form::text('quantity', null, ['class' => 'form-control', 'placeholder' => 'Escribe la cantidad de producto para este pedido']) !!}
                        </div>




                        <button type="submit" class="btn btn-primary">Crear Pedido</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection