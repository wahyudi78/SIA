<?php

namespace App\Models;

use App\Models\Absensi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Guru extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    
    public function absensi()
    {
        return $this->hasMany(Absensi::class);
    }
    public function user()
    {
        return $this->hasOne(User::class);
    }

}
