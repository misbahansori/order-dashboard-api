<?php

namespace App\Http\Controllers;

use App\Actions\CSV;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ReportPlSymbolController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $validated = $request->validate([
            'group' => 'required|string|in:INR,INR_S,USD',
            'start' => 'required|date_format:Y-m-d H:i:s',
            'end'   => 'required|date_format:Y-m-d H:i:s',
        ]);

        $response = Http::get('http://api.tickpal.com/get_pl_symbol.php', [
            'grp'   => $validated['group'],
            'start' => $validated['start'],
            'end'   => $validated['end'],
        ]);

        [$headers, $rows] = CSV::parse($response->body());

        return response()->json([
            'data' => [
                'headers'  => $headers,
                'rows'     => $rows,
                'currency' => 'INR',
            ],
        ]);
    }
}
