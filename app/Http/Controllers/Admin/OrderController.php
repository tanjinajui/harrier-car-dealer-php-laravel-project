<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Orders;
use App\Items;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders=Orders::all();
        return view ('Admin.multiple_data.index',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.multiple_data.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //form validation
        $request->validate([
        'customer_name' => 'required',
        'customer_address' => 'required',
    ]);
        $data=$request->all();
        $lastid=Orders::create($data)->id;
        if(count($request->product_name) > 0)
        {
            foreach ($request->product_name as $item => $value) {
                $data2=array(
                    'orders_id'=>$lastid,
                    'product_name'=>$request->product_name[$item],
                    'brand'=>$request->brand[$item],
                    'quantity'=>$request->quantity[$item],
                    'budget'=>$request->budget[$item],
                    'amount'=>$request->amount[$item],

                );
            Items::insert($data2);
            }
        }
        return redirect()->back()->with('success','data insert successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Orders::find($id);
        $items=Items::all();
        return view('Admin.multiple_data.edit',compact('data','items'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=Orders::find($id);
        $data->customer_name=$request->customer_name;
        $data->customer_address=$request->customer_address;
        $data->save();
        if (count($request->id) > 0) {
            foreach ($request->id as $item => $value) {
                $datad=array(
                    'product_name'=>$request->product_name[$item],
                    'brand'=>$request->brand[$item],
                    'quantity'=>$request->quantity[$item],
                    'budget'=>$request->budget[$item],
                    'amount'=>$request->amount[$item],
                );
                $dataitem=Items::where('id',$request->id[$item])->first();
                $dataitem->update($datad);
            }
        }
        return redirect('/multipleDataView')->with('success','Multiple Data upndate successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function items($id)
    {
        $items=Items::where('orders_id','=', $id)->get();
        return view('Admin.multiple_data.items',compact('items'));
    }
}
