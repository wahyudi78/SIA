<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function absensi()
    {
        return $this->hasMany(Absensi::class);
    }
    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }

}
