<?php

namespace Domain\Base;

use App\Http\Controllers\Controller;

class TController extends Controller
{
    public function responseJson(array $data, int $http_code = 200)
    {
        return response()->json($data, $http_code);
    }
}