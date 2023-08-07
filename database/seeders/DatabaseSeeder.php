<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Guru;
use App\Models\User;
use App\Models\Mapel;
use App\Models\Nilai;
use App\Models\Siswa;
use App\Models\Jadwal;
use App\Models\Absensi;
use App\Models\Ruangan;
use App\Models\Pembayaran;
use App\Models\UserDetail;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        User::factory(3)->create();
        Siswa::factory(2)->create();
        Guru::factory(2)->create();
        Mapel::factory(2)->create();
        Ruangan::factory(2)->create();
        Pembayaran::factory(2)->create();
        Absensi::factory(2)->create();
        Nilai::factory(2)->create();
        Jadwal::factory(2)->create();
    }
}
