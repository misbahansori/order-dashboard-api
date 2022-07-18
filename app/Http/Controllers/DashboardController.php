<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\DashboardRepository;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, DashboardRepository $dashboardRepository)
    {
        return response()->json([
            'data' => [
                'fum'                      => $dashboardRepository->getFum(),
                'most_logged_in_id'        => $dashboardRepository->getMostLoggedInId(),
                'never_logged_in_id_count' => $dashboardRepository->getNeverLoggedInIdCount(),
                'login_chance'             => $dashboardRepository->getLoginChance(),
                'activity_percentage'      => $dashboardRepository->getActivityPercentage(),
            ]
        ]);
    }
}
