<?php

namespace App\Swagger\Models;

/**
 * @OA\Schema(
 *     schema="Login",
 *     type="object",
 *     title="Login",   
 *     description="Dados de login do usuário",
 *     required={"crm", "senha"},
 *     @OA\Property(
 *         property="crm", 
 *         type="string",
 *         example="123456",
 *         description="Número do CRM do usuário"
 *     ),
 *     @OA\Property(
 *         property="senha", 
 *         type="string",
 *         format="password",
 *         example="senha123",
 *         description="Senha do usuário"
 *     )
 * )
 */
class Login
{
}
