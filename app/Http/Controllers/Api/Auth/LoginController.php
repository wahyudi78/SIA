<?php

namespace App\Http\Controllers\Api\Auth;

use App\Models\Guru;
use App\Models\User;
use App\Models\Siswa;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(LoginRequest $request)
    {
        $user = User::where('username', $request->username)->first();

        if(!$user || !Hash::check($request->password, $user->password)){
            throw ValidationException::withMessages([
                'username' => ['username incorect']
            ]);
        }

        // $role = $user->role;
        if($user->role == 3){
            $detail = Siswa::where('user_account', $user->id)->first();
        }elseif($user->role == 2){
            $detail = Guru::where('user_account', $user->id)->first();
        }
        $detail = null;

        return response()->json([
            'user'  => $user,
            'detail' => $detail,
            'token' => $user->createToken('laravel_api_token')->plainTextToken
        ]);
    }
}
