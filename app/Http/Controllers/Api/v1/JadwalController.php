<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Guru;
use App\Models\Jadwal;
use App\Http\Controllers\Controller;
use App\Http\Resources\JadwalResource;
use App\Http\Requests\StoreJadwalRequest;
use App\Http\Requests\UpdateJadwalRequest;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return JadwalResource::collection(Jadwal::all());
    }

    

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJadwalRequest $request)
    {
        $q = Jadwal::create($request->validated());
        return JadwalResource::make($q);
    }

    /**
     * Display the specified resource.
     */
    public function show(Jadwal $jadwal)
    {
        return JadwalResource::make($jadwal);
        
    }

   
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJadwalRequest $request, Jadwal $jadwal)
    {
        $jadwal->update($request->validated());
        return JadwalResource::make($jadwal);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jadwal $jadwal)
    {
        $jadwal->delete();
        return response()->noContent();
    }
}
