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
                <th>Client E-mail</th>
                <th>Partner Name</th>
                <th>Products</th>
                <th>Order Status</th>
                <th>Order Cost</th>
                <th>Order Save Status</th>
            </tr>
            </thead>

            @foreach($orders_edit as $order_edit)
                <tr>
                    <td>{{$order_edit->client_email}}</td>
                    <td>{{$order_edit->partner_name}}</td>
                    <td>{{$order_edit->products}}</td>
                    <td>{{$order_edit->order_status}}</td>
                    <td>{{$order_edit->order_cost}}</td>
                    <td>{{$order_edit->order_save_status}}</td>
                </tr>
            @endforeach

        </table>





    </div>
@endsection
