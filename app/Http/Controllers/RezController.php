<?php

namespace App\Http\Controllers;

use App\Models\Rez;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\RezResource;
use App\Http\Resources\RezCollection;

class RezController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rezs = Rez::all();
        return $rezs;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Rez $rez)
    {
        return new RezResource($rez);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rez $rez)
    {
        //
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rez $rez)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rez $rez)
    {
        //
    }
}
