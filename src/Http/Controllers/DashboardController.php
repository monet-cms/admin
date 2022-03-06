<?php

namespace Monet\Framework\Admin\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show(Request $request)
    {
        $user = $request->user();

        $dashboardNames = $user->dashboards()->pluck('id', 'name')->all();

        $activeDashboard = $user->active_dashboard;

        return view('monet.admin::dashboard', [
            'activeDashboard' => $activeDashboard,
            'dashboardNames' => $dashboardNames
        ]);
    }
}