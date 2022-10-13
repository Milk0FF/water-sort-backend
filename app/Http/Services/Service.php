<?php

namespace App\Http\Services;

use Illuminate\Http\JsonResponse;

class Service
{
    public function success($data = null, $status_code = 200): JsonResponse
    {
        return response()->json([ 'data' => $data ], $status_code);
    }

    public function error($message = '', $status_code = 500): JsonResponse
    {
        $returnData = [];
        $returnData['data'] = [
            'errors' => [
                'message' => $message
            ],
        ];

        return response()->json($returnData, $status_code);
    }

    public function validationError($errors = []): JsonResponse
    {
        $returnData = [];
        $returnData['data'] = [
            'errors' => $errors,
        ];
        
        return response()->json($returnData, 400);
    }
}
