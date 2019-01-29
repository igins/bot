<?php

namespace App\Http\Controllers\Backend;

use Caffeinated\Themes\Facades\Theme;
use Illuminate\Http\Request;
use App\Http\Controllers\Backend\BackendController as Backend;

class SettingsController extends Backend
{
    public function index()
    {
        return view(Theme::getCurrent() . "::app.settings.index");
    }
}
