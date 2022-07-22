<?php

namespace App\Actions;

use Illuminate\Support\Str;

class CSV
{
    public static function parse(string $string)
    {
        $csv = explode("\n", $string);

        $array = [];

        foreach ($csv as $key => $value) {
            $rows = explode(",", $value);

            if (count($rows) > 1) {
                $array[] = $rows;
            }
        }

        $headers = collect(array_shift($array))->map(function ($item) {
            return Str::of($item)->snake()->replace('_', ' ');
        });


        return [$headers, $array];
    }
}
