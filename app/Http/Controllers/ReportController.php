<?php

namespace App\Http\Controllers;

use App\Actions\CSV;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class ReportController extends Controller
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
            'group_by' => 'required|string|in:Login,Agent',
        ]);

        $response = Http::get('http://api.tickpal.com/get_equity.php?', [
            'grp' => $validated['group'],
            'by' => $validated['group_by'],
        ]);

        [$headers, $rows] = CSV::parse($response->body());

        $currency = $validated['group'] === 'INR_S' ? 'INR' : $validated['group'];

        return response()->json([
            'data' => [
                'headers'  => $headers,
                'rows'     => $rows,
                'currency' => $currency,
            ],
        ]);
    }
}
