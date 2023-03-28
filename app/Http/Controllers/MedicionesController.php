<?php

namespace App\Http\Controllers;

use App\Models\Mediciones;
use Illuminate\Http\Request;

class MedicionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin_tablas.Mediciones');
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
     * @param  \App\Models\Mediciones  $mediciones
     * @return \Illuminate\Http\Response
     */
    public function show(Mediciones $mediciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mediciones  $mediciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Mediciones $mediciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mediciones  $mediciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mediciones $mediciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mediciones  $mediciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mediciones $mediciones)
    {
        //
    }
}
