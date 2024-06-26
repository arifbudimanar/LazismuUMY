<?php

namespace App\Http\Controllers;

use App\Models\Ashnaf;
use Illuminate\Http\Request;

class AshnafController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ashnafs = Ashnaf::query()
            ->paginate(10);

        return view('ashnaf.index', compact('ashnafs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ashnaf.create');
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
    public function show(Ashnaf $ashnaf)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ashnaf $ashnaf)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ashnaf $ashnaf)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ashnaf $ashnaf)
    {
        //
    }
}
