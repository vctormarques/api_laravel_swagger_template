<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ApiResponseMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        if ($request->is('api/v1/documentation*') || $request->is('docs*')) {
            return $response;
        }

        if ($response->headers->get('Content-Type') === 'application/json' || is_array($response->getOriginalContent())) {
            $originalContent = $response->getOriginalContent();
            $formattedResponse = [
                'status' => $response->isSuccessful(),
                'message' => $response->isSuccessful() ? 'Requisicao bem sucedida' : 'Erro na requisicao',
                'data' => $originalContent,
            ];

            $response->setContent(json_encode($formattedResponse));
        }

        return $response;
    }
}
