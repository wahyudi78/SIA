<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // public function siswa()
    // {
    //     return $this->belongsTo(Siswa::class);
    // }
    // public function guru()
    // {
    //     return $this->belongsTo(Guru::class);
    // }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function mapel()
    {
        return $this->belongsTo(Mapel::class);
    }
    public function ruangan()
    {
        return $this->belongsTo(Ruangan::class);
    }
}
