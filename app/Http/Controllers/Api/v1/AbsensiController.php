<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Absensi;
use App\Http\Controllers\Controller;
use App\Http\Resources\AbsensiResource;
use App\Http\Requests\StoreAbsensiRequest;
use App\Http\Requests\UpdateAbsensiRequest;
 use App\Models\Obra;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        // $this->authorize('viewAny');

        $absen = Absensi::with('guru')->get();
        return AbsensiResource::collection($absen);
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
    public function store(StoreAbsensiRequest $request)
    {
        $q = Absensi::create($request->validated());
        return AbsensiResource::make($q);
    }

    /**
     * Display the specified resource.
     */
    public function show(Absensi $absensi)
    {
        return AbsensiResource::make($absensi);
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Absensi $absensi)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAbsensiRequest $request, Absensi $absensi)
    {
        $absensi->update($request->validated());
        return AbsensiResource::make($absensi);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Absensi $absensi)
    {
        $absensi->delete();
        return response()->noContent();
    }
}
