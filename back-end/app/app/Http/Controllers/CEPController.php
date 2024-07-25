<?php

namespace App\Http\Controllers;

use App\Http\Requests\CEPRequest;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\JsonResponse;
use Throwable;
use Illuminate\Http\Response;

class CEPController extends Controller
{
    public function index(CEPRequest $request): JsonResponse
    {
        try
        {
            $request = Http::get(config('services.viacep.url') . "/{$request->cep}/json");

            $response = $request->json();

            return response()->json([
                'status'   => 'success',
                'message'  => 'Dados do CEP informado',
                'data'     => $response
            ]);
        }
        catch (Throwable $throwable)
        {
            return response()->json([
                'status'  => 'error',
                'message' => $throwable->getMessage(),
                'data'    => null
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
