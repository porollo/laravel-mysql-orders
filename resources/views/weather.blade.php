@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @
@endsection

@section('content')

    <div style="text-align: center;">

        <div class="title m-b-md">
        <h3>Temperature in Bryansk city is:
            <br/>
            <b>{{$temperature}} &#8451;</b></h3>
        </div>
    </div>
@endsection