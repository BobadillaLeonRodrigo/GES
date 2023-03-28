<?php

namespace App\Http\Controllers;

use App\Models\Plantas;
use Illuminate\Http\Request;

class PlantasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin_tablas.Plantas');
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
     * @param  \App\Models\Plantas  $plantas
     * @return \Illuminate\Http\Response
     */
    public function show(Plantas $plantas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plantas  $plantas
     * @return \Illuminate\Http\Response
     */
    public function edit(Plantas $plantas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plantas  $plantas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plantas $plantas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plantas  $plantas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plantas $plantas)
    {
        //
    }
}
