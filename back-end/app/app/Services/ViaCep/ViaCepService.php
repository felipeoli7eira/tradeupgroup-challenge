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

            return [
                'status'  => 'success',
                'message' => 'Dados do CEP informado',
                'data'    => $request->json()
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
