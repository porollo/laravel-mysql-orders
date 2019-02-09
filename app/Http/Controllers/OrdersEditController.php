<?php

namespace App\Http\Controllers;

use App\OrderEdit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class OrdersEditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders_edit = DB::table('orders_edit')->paginate(30);
        return view('orders-edit', ['orders_edit' => $orders_edit]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orders_update = DB::select('select * from orders_edit where id = ?',[$id]);
        return view('orders-update',['orders-update'=>$orders_update]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     * @param $id
     * @return void
     */
    public function edit(Request $request,$id)
    {
        $name = $request->input('stud_name');
        DB::update('update student set name = ? where id = ?',[$name,$id]);
        echo "Record updated successfully.<br/>";
        echo '<a href = "/edit-records">Click Here</a> to go back.';

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OrderEdit  $orderEdit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrderEdit $orderEdit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OrderEdit  $orderEdit
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderEdit $orderEdit)
    {
        //
    }
}
