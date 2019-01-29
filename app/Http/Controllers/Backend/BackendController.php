<?php

namespace App\Http\Controllers\Backend;

use Caffeinated\Themes\Facades\Theme;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BackendController extends Controller
{
    public function __construct()
    {
        Theme::setCurrent('limitless');
    }
}
