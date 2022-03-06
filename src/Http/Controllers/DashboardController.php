<?php

namespace Monet\Framework\Admin\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show(Request $request)
    {
        $user = $request->user();

        $dashboardNames = $user->dashboards()->pluck('name')->all();

        $dashboard = $user->active_dashboard;

        return view('monet.admin::dashboard', [
            'dashboard' => $dashboard,
            'dashboardNames' => $dashboardNames
        ]);
    }
}