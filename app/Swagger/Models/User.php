<?php

namespace App\Swagger\Models;

/**
 * @OA\Schema(
 *     schema="User",
 *     type="object",
 *     @OA\Property(property="AutoId", type="integer"),
 *     @OA\Property(property="nome", type="string"),
 *     @OA\Property(property="email", type="string"),
 *     @OA\Property(property="crm", type="integer"),
 *     @OA\Property(property="cpf", type="integer"),
 *     @OA\Property(property="contratoFinanceiro", type="integer"),
 *     @OA\Property(property="perfil", type="integer"),
 *     @OA\Property(property="diretor", type="integer")
 * )
 */
class User
{
}
