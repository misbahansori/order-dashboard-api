<?php

namespace App\Http\Controllers;

use App\Models\Storage;
use App\Models\Shipping;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShippingAndStorageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $totalShipping = Shipping::all();
        $totalStorage = Storage::all();

        return response()->json([
            'shipping' => [
                'total' => $totalShipping->count(),
                'amount' => $totalShipping->sum('amount'),
            ],
            'storage' => [
                'total' => $totalStorage->count(),
                'amount' => $totalStorage->sum('amount'),
            ],
        ]);
    }
}
