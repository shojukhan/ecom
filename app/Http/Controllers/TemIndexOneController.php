<?php

namespace App\Http\Controllers;

use App\Models\temIndexOne;
use Illuminate\Http\Request;

class TemIndexOneController extends Controller
{
    /**
     * Display a listing of the resource.
     */

        public function TemIndexOneView(){

            return view('template\index1');
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
    public function show(temIndexOne $temIndexOne)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(temIndexOne $temIndexOne)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, temIndexOne $temIndexOne)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(temIndexOne $temIndexOne)
    {
        //
    }
}
