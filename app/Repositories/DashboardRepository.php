<?php

namespace App\Repositories;

class DashboardRepository
{
    public function getFum()
    {
        return [
            'total'   => fake()->numberBetween(100, 200) * 10000,
            'average' => fake()->numberBetween(100, 200) * 10000,
            'clients' => fake()->numberBetween(10, 100),
        ];
    }

    public function getMostLoggedInId()
    {
        return fake()->numberBetween(1, 100);
    }

    public function getNeverLoggedInIdCount()
    {
        return fake()->numberBetween(1, 100);
    }

    public function getLoginChance()
    {
        return fake()->numberBetween(1, 100);
    }

    public function getActivityPercentage()
    {
        return fake()->numberBetween(-100, 100);
    }
}
