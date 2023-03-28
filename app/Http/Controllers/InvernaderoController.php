<?php

namespace App\Http\Controllers;

use App\Models\Invernadero;
use Illuminate\Http\Request;

class InvernaderoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin_tablas.Invernadero');
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
     * @param  \App\Models\Invernadero  $invernadero
     * @return \Illuminate\Http\Response
     */
    public function show(Invernadero $invernadero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invernadero  $invernadero
     * @return \Illuminate\Http\Response
     */
    public function edit(Invernadero $invernadero)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Invernadero  $invernadero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invernadero $invernadero)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invernadero  $invernadero
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invernadero $invernadero)
    {
        //
    }
}
