<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Http\Resources\GuruResource;
use App\Http\Resources\MapelResource;
use App\Http\Resources\RuanganResource;
use Illuminate\Http\Resources\Json\JsonResource;

class AbsensiResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id ,
            'jenis' => $this->jenis ,
            'waktu' => $this->waktu,
            // 'guru' => new GuruResource($this->gurus),
            'guru' => new GuruResource($this->guru),
            'ruang' => new RuanganResource($this->ruangan), 
            'mapel' => new MapelResource($this->mapel)
          ];
        // return parent::toArray($request);
    }
}
