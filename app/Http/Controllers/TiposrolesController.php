<?php

namespace App\Http\Controllers;

use App\Models\Tiposroles;
use Illuminate\Http\Request;

class TiposrolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin_tablas.TiposRoles');
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
     * @param  \App\Models\Tiposroles  $tiposroles
     * @return \Illuminate\Http\Response
     */
    public function show(Tiposroles $tiposroles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tiposroles  $tiposroles
     * @return \Illuminate\Http\Response
     */
    public function edit(Tiposroles $tiposroles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tiposroles  $tiposroles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tiposroles $tiposroles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tiposroles  $tiposroles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tiposroles $tiposroles)
    {
        //
    }
}
