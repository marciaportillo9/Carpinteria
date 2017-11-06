@extends('layout')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @include('partials/errors')
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Usuario</div>
                    <div class="panel-body">

                        {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'PUT']) !!}

                        @include('auth.partials.fields')

                        <button type="submit" class="btn btn-primary">Actualizar Usuario</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection