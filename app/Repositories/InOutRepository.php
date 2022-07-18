<?php

namespace App\Repositories;

use Carbon\Carbon;

class InOutRepository
{
    public function getInOutData()
    {
        $data = collect();

        for ($i = 0; $i < 10; $i++) {
            $data->push([
                'value' => fake()->numberBetween(1, 100),
                'date'  => Carbon::now()->subDays($i)->format('Y-m-d'),
            ]);
        }

        return [
            'series' => $data->pluck('value'),
            'label'  => $data->pluck('date'),
        ];
    }
}
