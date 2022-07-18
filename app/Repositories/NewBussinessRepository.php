<?php

namespace App\Repositories;

class NewBussinessRepository
{
    public function getNewBussinnessData()
    {
        $series = collect();

        for ($i = 0; $i < 3; $i++) {
            $data = collect();

            for ($j = 0; $j < 10; $j++) {
                $data->push(fake()->numberBetween(1, 100));
            }

            $series->push([
                'name' => fake()->company(),
                'data' => $data,
            ]);
        }

        return $series;
    }
}
