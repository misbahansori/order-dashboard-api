<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ModelAlocationRepository;

class ModelAllocationController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, ModelAlocationRepository $modelAlocationRepository)
    {
        $data = $modelAlocationRepository->getAlocationData();

        return response()->json([
            'data' => $data,
        ]);
    }
}
