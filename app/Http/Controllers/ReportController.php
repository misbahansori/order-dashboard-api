<?php

namespace App\Http\Controllers;

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

        $response = Http::get('http://api.tickpal.com/get_equity.php?' . Arr::query([
            'grp' => $validated['group'],
            'by' => $validated['group_by'],
        ]));

        $csv = explode("\n", $response->body());

        $array = [];

        foreach ($csv as $key => $value) {
            $array[] = explode(",", $value);
        }

        $headers = collect(array_shift($array))->map(function ($item) {
            return Str::snake($item);
        });

        return response()->json([
            'data' => [
                'headers' => $headers,
                'rows' => $array,
            ],
        ]);
    }
}
