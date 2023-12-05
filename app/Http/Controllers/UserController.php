<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegisterRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    public function index()
    {
        if (!Gate::allows('update-post', auth()->user())) {
            return UserResource::collection(User::where('id', auth()->user()->id)->get());
        } else {
            return UserResource::collection(User::all());
        }

    }


}
