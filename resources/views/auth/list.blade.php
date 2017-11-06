@extends('app')

@section('main-content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @include('partials/errors')
                <div class="panel panel-default">
                    <div class="panel-heading">Lista de Clientes
                        <a href={{route('register')}} class="btn-xs btn-primary pull-right" role="button">Add</a>
                    </div>
                    <div class="panel-body">

                        <table class="table table-striped">
                            <tr>
                                <th>Nro</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Actions</th>
                                <th></th>
                            </tr>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->role}}</td>

                                    <td><a href="{{route('users.edit', $user->id)}}" class="btn btn-primary">Edit</a></td>
                                    <td>
                                        {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'DELETE']) !!}
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