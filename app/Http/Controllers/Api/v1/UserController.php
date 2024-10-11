<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
 
    public function index()
    {
        try{
            $users = User::orderBy('nome', 'asc')->get();
            return response()->json($users, 200);
        } catch (\Exception $e){
            return response()->json($e->getMessage(), 500);
        }
    }
 
    
}
