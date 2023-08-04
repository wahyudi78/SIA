<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Nilai;
use App\Http\Controllers\Controller;
use App\Http\Resources\NilaiResource;
use App\Http\Requests\StoreNilaiRequest;
use App\Http\Requests\UpdateNilaiRequest;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return NilaiResource::colection(Nilai::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNilaiRequest $request)
    {
        $q = Nilai::create($request->validated());
        return NilaiResource::make($q);
    }

    /**
     * Display the specified resource.
     */
    public function show(Nilai $nilai)
    {
        NilaiResource::make($nilai);
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Nilai $nilai)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNilaiRequest $request, Nilai $nilai)
    {
        $nilai->update($request->validated());
        return NilaiResource::make($nilai);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nilai $nilai)
    {
        $nilai->delete();
        return response()->noContent();
    }
}
