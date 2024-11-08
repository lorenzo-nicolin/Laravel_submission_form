<?php

namespace App\Http\Controllers;

use App\Models\Lyrics;
use Illuminate\Http\Request;

class LyricsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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

        $data = new Lyrics();
        $data->title = $request->input('title');
        $data->lyrics = $request->input('lyrics');
        // // Add more columns as needed
        $data->save();

        return response()->json(['message' => 'Data saved successfully'], 201);


    }

    /**
     * Display the specified resource.
     */
    public function show(Lyrics $lyrics)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lyrics $lyrics)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lyrics $lyrics)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lyrics $lyrics)
    {
        //
    }
}
