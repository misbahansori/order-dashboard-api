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

        $data = [];
        $headers = [];

        foreach ($csv as $index => $rows) {
            if ($index == 0) {
                $headers = explode(',', $rows);

                $headers = array_map(function ($header) {
                    return Str::snake($header);
                }, $headers);
            } else {
                $rows = explode(',', $rows);
                if (count($rows) !== count($headers)) {
                    continue;
                }
                $data[] = array_combine($headers, $rows);
            }
        }

        array_shift($data);

        return response()->json([
            'data' => $data,
        ]);
    }
}
