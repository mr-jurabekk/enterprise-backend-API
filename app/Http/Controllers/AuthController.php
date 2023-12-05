<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\StoreRegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $user = User::where('email', $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'password' => ['The provided password does not match our records.']
            ]);
        }

        return response()->json([
            'token' =>$user->createToken($request->email)->plainTextToken,
        ]);
    }

    public function register(StoreRegisterRequest $request)
    {

//        dd($request);
        $user = User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'family_name' => $request->family_name,
            'email' => $request->email,
            'password' => $request->password,
            'position' => $request->position,
            'phone' => $request->phone,
            'address' => $request->address,
            'company' => $request->company,
        ]);

        if ($user){
            return response()->json([
                'success' => true, 'message' => 'User has been created!'
            ]);
        }else{
            return response()->json([
                'success' => false, 'message' => 'Something went wrong!'
            ]);
        }

    }

    public function user(Request $request)
    {
        return $request->user();
    }

    public function destroy()
    {
        //
    }

}
