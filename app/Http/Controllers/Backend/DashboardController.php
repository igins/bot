<?php

namespace App\Http\Controllers\Backend;

use Caffeinated\Themes\Facades\Theme;
use Illuminate\Http\Request;
use App\Http\Controllers\Backend\BackendController as Backend;

class DashboardController extends Backend
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        return view(Theme::getCurrent() . "::app.dashboard.index");
    }
}
