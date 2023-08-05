<?php

namespace App\Models;

use App\Models\Guru;
use App\Models\Mapel;
use App\Models\Siswa;
use App\Models\Ruangan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Absensi extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    
    public function guru()
    {
        return $this->belongsTo(Guru::class);
        // return $this->belongsTo(Ruaangan::class);
    }
    public function ruangan()
    {
        return $this->belongsTo(Ruangan::class);
        // return $this->belongsTo(Ruaangan::class);
    }
    public function mapel()
    {
        return $this->belongsTo(Mapel::class);
        // return $this->belongsTo(Ruaangan::class);
    }
    // public function mapel()
    // {
    //     return $this->hasOne(Mapel::class);
    // }
    // public function ruangan()
    // {
    //     return $this->hasOne(Ruangan::class);
    // }
}
