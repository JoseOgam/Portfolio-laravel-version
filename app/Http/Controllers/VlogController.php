<?php

namespace App\Http\Controllers;

use App\Vlog;
use Illuminate\Http\Request;

class VlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products.log');
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
     * @param  \App\Vlog  $vlog
     * @return \Illuminate\Http\Response
     */
    public function show(Vlog $vlog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vlog  $vlog
     * @return \Illuminate\Http\Response
     */
    public function edit(Vlog $vlog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vlog  $vlog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vlog $vlog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vlog  $vlog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vlog $vlog)
    {
        //
    }
}
