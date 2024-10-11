<?php

namespace App\Swagger\Operations;

use OpenApi\Annotations as OA;

/**
 * @OA\Post(
 *     path="/api/v1/login",
 *     summary="Realiza o login do usuário",
 *     tags={"Autenticação"},
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             required={"crm","senha"},
 *             @OA\Property(property="crm", type="integer", example=123456, description="CRM do usuário"),
 *             @OA\Property(property="senha", type="string", format="password", example="minhasenha123", description="Senha do usuário")
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Login bem-sucedido",
 *         @OA\JsonContent(
 *             @OA\Property(property="token", type="string", example="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9..."),
 *             @OA\Property(property="message", type="string", example="Login efetuado com sucesso"),
 *             @OA\Property(property="user", type="object", ref="#/components/schemas/User")
 *         )
 *     ),
 *     @OA\Response(
 *         response=403,
 *         description="Credenciais inválidas",
 *         @OA\JsonContent(
 *             @OA\Property(property="status", type="boolean", example=false),
 *             @OA\Property(property="message", type="string", example="Erro na requisicao"),
 *             @OA\Property(
 *                 property="data",
 *                 type="object",
 *                 @OA\Property(property="message", type="string", example="Usuário ou Senha inválida")
 *             )
 *         )
 *     )
 * )
 */
class LoginOperations {}
