<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    /**
     * @OA\Tag(name="Login")
     */
    public function login(Request $request)
    {
        $request->validate([
            "crm" => "required|integer",
            "senha" => "required"
        ]);

        $user = User::where("crm", $request->crm)->first();

        if ($user && md5($request->senha) === $user->senha) {

            $token = $user->createToken("myToken")->accessToken;

            return response()->json([
                'token' => $token,
                'message' => 'Login efetuado com sucesso',
                'user' => $user
            ], 200);
        }
        return response()->json([
            'message' => 'Usuário ou Senha inválida'
        ], 403);
    }

    public function refreshToken()
    {
        $user = request()->user();
        $token = $user->createToken("newToken");
        $refreshToken = $token->accessToken;

        return response()->json([
            "refresh_token" => $refreshToken
        ]);
    }

    public function logout()
    {
        $user = request()->user()->tokens()->delete();

        return response()->json([
            "message" => 'Usuário logged out'
        ]);
    }
}
