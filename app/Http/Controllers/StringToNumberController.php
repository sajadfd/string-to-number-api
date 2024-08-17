<?php

namespace App\Http\Controllers;

use App\Http\Requests\StringToNumberRequest;
use App\Services\StringToNumberService;
use Illuminate\Http\JsonResponse;

class StringToNumberController extends Controller
{
    protected $stringToNumberService;

    public function __construct(StringToNumberService $stringToNumberService)
    {
        $this->stringToNumberService = $stringToNumberService;
    }

    public function convert(StringToNumberRequest $request): JsonResponse
    {
        $string = $request->input('string');
        $result = $this->stringToNumberService->convertStringToNumber($string);

        return response()->json(['result' => $result]);
    }
}
