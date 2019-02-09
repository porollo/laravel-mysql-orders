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
                    <th>Product Name</th>
                    <th>Product Cost</th>
                    <th>Provider Name</th>
                </tr>
                </thead>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->product_name}}</td>
                        <td>{{$product->product_cost}}</td>
                        <td>{{$product->provider_name}}</td>
                    </tr>
                @endforeach

            </table>
            {{ $products->links() }}

        </div>

@endsection