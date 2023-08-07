<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Siswa;
use App\Models\Pembayaran;
use Illuminate\Auth\Access\Response;

class PembayaranPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user, Pembayaran $pembayaran ): bool
    {
        
        // return 
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Pembayaran $pembayaran): bool
    {
        $users=[];
        if($user->role == 3){
            $users = Siswa::where('user_account', $user->id)->first();

        }elseif($user->role == 2){
            $users = Guru::where('user_account', $user->id)->first();
        }

        return $users->id === $pembayaran->siswa;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Pembayaran $pembayaran): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Pembayaran $pembayaran): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Pembayaran $pembayaran): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Pembayaran $pembayaran): bool
    {
        //
    }
}
