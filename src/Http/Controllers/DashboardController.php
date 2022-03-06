<?php

namespace Monet\Framework\Admin\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show(Request $request)
    {
        $dashboardNames = $request->dashboards()->pluck('id', 'name')->all();

        dd($dashboardNames);

        $activeDashboard = $request->user()->active_dashboard;

        return view('monet.admin::dashboard', [
            'activeDashboard' => $activeDashboard,
            'dashboardNames' => $dashboardNames
        ]);
    }
}