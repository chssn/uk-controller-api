<?php

namespace App\Http\Controllers;

use App\Models\Runway\Runway;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class RunwayController extends BaseController
{
    public function getAllRunways() : JsonResponse
    {
        return response()->json(Runway::all());
    }
}
