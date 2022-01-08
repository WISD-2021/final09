<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
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
        if($_POST["edit"]==1)
        {
            DB::table('users')
                ->where('id', auth()->user()->id)
                ->update(array('email' => $_POST["email"]));
            $hashstr=Hash::make($_POST["password"]);
            DB::table('users')
                ->where('id', auth()->user()->id)
                ->update(array('password' => $hashstr));
            return redirect()->route('accountadjust',0);
        }
        if($_POST["edit"]==2)
        {
            DB::table('users')
                ->where('name', $_POST["sellername"])
                ->update(array('auth' => 1));
            DB::table('users')
                ->where('name', $_POST["sellername"])
                ->update(array('address' => $_POST["address"]));
            return redirect()->route('accountadjust',0);
        }
        if($_POST["edit"]==3)
        {
            DB::table('users')
                ->where('name', $_POST["sellername"])
                ->update(array('auth' => 2));
            return redirect()->route('accountadjust',0);
        }
        if($_POST["edit"]==4)
        {
            DB::table('products')->insert(
                array('name' => $_POST["name"]
                , 'member_id' => auth()->user()->id
                , 'description' => $_POST["description"]
                , 'category' => $_POST["category"]
                , 'image' => $_POST["image"]
                , 'price' => $_POST["price"]
                , 'stock' => $_POST["quantity"]
                )
            );
            return redirect()->route('accountadjust',0);
        }
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
