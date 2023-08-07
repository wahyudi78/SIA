<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class JadwalResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
       return[
        'id' => $this->id ,
        'mapel' => $this->mapel ,
        'hari' => $this->hari ,
        'mulai' => $this->mulai,
        'selesai' => $this->selesai,
        'kelas' => $this->kelas,
        'ruangan' =>  new RuanganResource($this->ruangan),
       ];
    }
}
