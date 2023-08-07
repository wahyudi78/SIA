<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function mapel()
    {
        return $this->belongsTo(Mapel::class);
    }
    public function ruangan()
    {
        return $this->belongsTo(Ruangan::class);
    }
}
