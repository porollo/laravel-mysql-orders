@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @
@endsection

@section('content')

    <div style="text-align: center;">

        <table class="table table-striped table-bordered table-hover">

            <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Order Name</th>
                <th>Order Cost</th>
                <th>Order Status</th>
                <th>Partner Name</th>
            </tr>
            </thead>

            @foreach($orders as $order)
                <tr>
                    <td><a href = 'edit/{{ $order->id }}' target='_blank'>{{$order->id}}</a></td>
                    <td>{{$order->order_name}}</td>
                    <td>{{$order->order_cost}}</td>
                    <td>{{$order->order_status}}</td>
                    <td>{{$order->partner_name}}</td>
                </tr>
            @endforeach

        </table>
        {{ $orders->links() }}




    </div>
@endsection