<?php

namespace App\Http\Controllers;

use App\Http\Requests\CEPRequest;
use App\Services\ViaCep\ViaCepService;
use Symfony\Component\HttpFoundation\JsonResponse;
use Illuminate\Http\Response;

class CEPController extends Controller
{
    public function index(CEPRequest $request): JsonResponse
    {
        $response = ViaCepService::getCep($request->cep);

        return response()->json($response, Response::HTTP_OK);
    }
}
