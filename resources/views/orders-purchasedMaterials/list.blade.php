@extends('app')

@section('main-content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @include('partials/errors')
                <div class="panel panel-default">
                    <div class="panel-heading">Lista de Pedidos
                        <a href="{{url('orders/create')}}" class="btn-xs btn-primary pull-right" role="button">Add</a>
                    </div>
                    <div class="panel-body">

                        <table class="table table-striped">
                            <tr>

                                <th>Nro</th>
                                <th>Deliver Date</th>
                                <th>Initial payment</th>
                                <th>Quantity</th>
                                <th>Status</th>
                                <th>Product</th>
                                <th>Client</th>
                                <th>User</th>
                                <th>Actions</th>
                                <th></th>


                            </tr>
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{$order->id}}</td>
                                    <td>{{$order->deliver_date}}</td>
                                    <td>{{$order->initial_payment}}</td>
                                    <td>{{$order->quantity}}</td>
                                    <td>{{$order->status}}</td>

                                    <td>{{$order->product->name}}</td>
                                    <td>{{$order->client->name}}</td>
                                    <td>{{$order->user->name}}</td>

                                    <td><a href="{{route('orders.edit', $order->id)}}" class="btn btn-primary">Edit</a></td>

                                </tr>
                            @endforeach
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection