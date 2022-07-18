<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\InOutRepository;

class InOutController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, InOutRepository $inOutRepository)
    {
        $data = $inOutRepository->getInOutData();

        return response()->json([
            'data' => $data,
        ]);
    }
}
