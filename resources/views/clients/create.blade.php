@extends('app')

@section('main-content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @include('partials/errors')
                <div class="panel panel-default">
                    <div class="panel-heading">Agregar Cliente</div>
                    <div class="panel-body">

                        {!! Form::open(array('route' => 'clients.store', 'method' => 'POST')) !!}

                        {!! Form::label('name', 'Client Name') !!}
                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Escribe el nombre del Cliente aqui']) !!}

                        {!! Form::label('nit', 'Nit') !!}
                        {!! Form::text('nit', null, ['class' => 'form-control', 'placeholder' => 'Escribe el NIT del cliente aqui']) !!}

                        {!! Form::label('email', 'Email') !!}
                        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Escribe el Email del cliente aqui']) !!}

                        {!! Form::label('phone', 'Phone') !!}
                        {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Escribe el Telefono del cliente aqui']) !!}

                        {!! Form::label('address', 'Adresss') !!}
                        {!! Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Escribe la dirección del cliente aqui']) !!}

                        <button type="submit" class="btn btn-primary">Crear Cliente</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection