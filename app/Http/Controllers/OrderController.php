<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (isset($_POST["bill"]))
        {
            $auth=auth()->user();
            $item=DB::table('cart_items')->where('member_id' ,$auth->id)->get();
            for ($i=0;$i<count($item);$i++)
            {

                $product=DB::table('products')->where('id' ,$item[$i]->product_id)->get();
                DB::table('orders')->insert(
                    array('member_id' => $auth->id
                    , 'status' => 0
                    )
                );
                if(isset($product[0]->id))
                {
                    DB::table('order_details')->insert(
                        array('order_id' => auth()->user()->id
                        , 'product_id' => $product[0]->id
                        , 'quantity' => $item[$i]->quantity
                        )
                    );
                }

                DB::table('cart_items')->where('product_id', $item[$i]->product_id)->where('member_id',$auth->id)->delete();
            }


            return redirect()->route('index');
        }
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
        //
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
        //
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
}
