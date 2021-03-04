<?php

namespace App\Http\Controllers;

use App\animalHistory;
use Illuminate\Http\Request;

class AnimalHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($animal_id)
    {
        //dd($id);
        return view('animals.animalhistory');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('animals.addhistory');
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
     * @param  \App\animalHistory  $animalHistory
     * @return \Illuminate\Http\Response
     */
    public function show(animalHistory $animalHistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\animalHistory  $animalHistory
     * @return \Illuminate\Http\Response
     */
    public function edit(animalHistory $animalHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\animalHistory  $animalHistory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, animalHistory $animalHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\animalHistory  $animalHistory
     * @return \Illuminate\Http\Response
     */
    public function destroy(animalHistory $animalHistory)
    {
        //
    }
}
