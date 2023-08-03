<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Guru;
use App\Http\Controllers\Controller;
use App\Http\Resources\GuruResource;
use App\Http\Requests\StoreGuruRequest;
use App\Http\Requests\UpdateGuruRequest;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return GuruResource::collection(Guru::all());
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
    public function store(StoreGuruRequest $request)
    {
        $q = Guru::create($request->validated());
        return GuruResource::make($q);
    }

    /**
     * Display the specified resource.
     */
    public function show(Guru $guru)
    {
        return GuruResource::make($guru);
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Guru $guru)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGuruRequest $request, Guru $guru)
    {
        $guru->update($request->validated());
        return GuruResource::make($guru);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guru $guru)
    {
        $guru->delete();
        return response()->noContent();
    }
}
