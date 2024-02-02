<?php

namespace App\Http\Controllers;

use App\Http\Requests\GetTopResultsRequest;
use App\Http\Requests\StoreResultRequest;
use App\Http\Resources\TopTenResultsResource;
use App\Services\ResultService;
use Illuminate\Http\JsonResponse;

class ResultController extends Controller
{
    public function store(StoreResultRequest $request, ResultService $service): JsonResponse
    {
        return response()->json([
            'result' => $service->createResult($request->milliseconds, $request->email)
        ]);
    }

    public function getTopResults(GetTopResultsRequest $request, ResultService $service): JsonResponse
    {
        $response = [
            'top' => TopTenResultsResource::collection($service->getTopTenResults())
        ];

        if ($request->email) {
            $response['self'] = $service->getTopTenResults($request->email);
        }

        return response()->json($response);
    }
}
