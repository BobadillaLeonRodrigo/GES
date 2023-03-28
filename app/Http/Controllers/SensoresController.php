<?php

namespace App\Http\Controllers;

use App\Models\Sensores;
use Illuminate\Http\Request;

class SensoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin_tablas.Sensores');
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
     * @param  \App\Models\Sensores  $sensores
     * @return \Illuminate\Http\Response
     */
    public function show(Sensores $sensores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sensores  $sensores
     * @return \Illuminate\Http\Response
     */
    public function edit(Sensores $sensores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sensores  $sensores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sensores $sensores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sensores  $sensores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sensores $sensores)
    {
        //
    }
}
