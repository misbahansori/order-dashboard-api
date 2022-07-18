<?php

namespace App\Repositories;

use App\Models\User;

class ModelAlocationRepository
{
    public function getAlocationData()
    {
        $data = User::inRandomOrder()->limit(5)->get();

        return [
            'series' => $data->pluck('id'),
            'labels'  => $data->pluck('name'),
        ];
    }
}
