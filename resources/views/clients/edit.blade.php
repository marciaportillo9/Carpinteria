@extends('app')

@section('main-content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @include('partials/errors')
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Cliente</div>
                    <div class="panel-body">

                        {!! Form::model($client, ['route' => ['clients.update', $client->id], 'method' => 'PUT']) !!}

                        @include('clients.partials.fields')

                        <button type="submit" class="btn btn-primary">Actualizar Cliente</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection