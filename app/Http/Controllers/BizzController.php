<?php

namespace App\Http\Controllers;

use App\Bizz;
use Illuminate\Http\Request;

class BizzController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products.bizz');
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
     * @param  \App\Bizz  $bizz
     * @return \Illuminate\Http\Response
     */
    public function show(Bizz $bizz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bizz  $bizz
     * @return \Illuminate\Http\Response
     */
    public function edit(Bizz $bizz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bizz  $bizz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bizz $bizz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bizz  $bizz
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bizz $bizz)
    {
        //
    }
}
