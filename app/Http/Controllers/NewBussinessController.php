<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\NewBussinessRepository;

class NewBussinessController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, NewBussinessRepository $newBussinessRepository)
    {
        $data = $newBussinessRepository->getNewBussinnessData();

        return response()->json([
            'data' => $data,
        ]);
    }
}
