<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $response = Http::get('http://api.tickpal.com/get_equity.php?grp=INR&by=Login');

        $csv = explode("\n", $response->body());

        $array = [];

        foreach ($csv as $key => $value) {
            $array[] = explode(",", $value);
        }

        $headers = array_shift($array);


        return response()->json([
            'data' => [
                'headers' => $headers,
                'rows' => $array,
            ],
        ]);
    }
}
