<?php

namespace App\Services\ViaCep;

use Throwable;
use Illuminate\Support\Facades\Http;

abstract class ViaCepService
{
    public static function getCep(string $cep): array
    {
        try
        {
            $request = Http::get(config('services.viacep.url') . "/$cep/json");

            $response = $request->json();

            return [
                'status'  => 'success',
                'message' => 'Dados do CEP informado',
                'data'    => $response
            ];
        }
        catch (Throwable $throwable)
        {
            return [
                'status'  => 'error',
                'message' => $throwable->getMessage(),
                'data'    => null
            ];
        }
    }
}
