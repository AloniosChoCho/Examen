<?php

namespace App\Http\Controllers;

use App\ExamenNetflix;
use Illuminate\Http\Request;

class ExamenNetflixController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('examen.netflix');
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
     * @param  \App\ExamenNetflix  $examenNetflix
     * @return \Illuminate\Http\Response
     */
    public function show(ExamenNetflix $examenNetflix)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ExamenNetflix  $examenNetflix
     * @return \Illuminate\Http\Response
     */
    public function edit(ExamenNetflix $examenNetflix)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ExamenNetflix  $examenNetflix
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExamenNetflix $examenNetflix)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ExamenNetflix  $examenNetflix
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExamenNetflix $examenNetflix)
    {
        //
    }
}
