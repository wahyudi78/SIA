<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Kelas;
use Illuminate\Routing\Controller;
use App\Http\Resources\KelasResource;
use App\Http\Requests\StoreKelasRequest;
use App\Http\Requests\UpdateKelasRequest;

class KelasController extends Controller
{
    public function index()
    {
        return KelasResource::collection(Kelas::all());
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
    public function store(StoreKelasRequest $request)
    {
        $q = Kelas::create($request->validated());
        return KelasResource::make($q);
    }

    /**
     * Display the specified resource.
     */
    public function show(Kelas $Kelas)
    {
        return KelasResource::make($Kelas);
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Kelas $Kelas)
    // {
        
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKelasRequest $request, Kelas $Kelas)
    {
        $Kelas->update($request->validated());
        return KelasResource::make($Kelas);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kelas $Kelas)
    {
        $Kelas->delete();
        return response()->noContent();
    }
}

