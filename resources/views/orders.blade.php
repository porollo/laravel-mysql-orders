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
                <th>Partner Name</th>
                <th>Order Price</th>
                <th>Product Name</th>
                <th>Order Status</th>
            </tr>
            </thead>

            @foreach($orders as $order)
                <tr>
                    <td><a href = 'edit/{{ $order->order_id }}' target='_blank'>{{$order->order_id}}</a></td>
                    <td>{{$order->order->partner->name}}</td>
                    <td>{{$order->price}}</td>
                    <td>{{$order->product->name}}</td>
                    <td>{{$order->order->status}}</td>
                </tr>
            @endforeach

        </table>
{{--
        {{ $order->links() }}
--}}

    </div>
@endsection
