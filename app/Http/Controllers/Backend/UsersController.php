<?php

namespace App\Http\Controllers\Backend;

use App\User;
use Caffeinated\Themes\Facades\Theme;
use Illuminate\Http\Request;
use App\Http\Controllers\Backend\BackendController as Backend;

class UsersController extends Backend
{
    public function index()
    {
        $data = [
            'page' => [
                'title' => 'Список пользователей',

            ],
            'slug' => 'users',
            'users' => User::all()
        ];

        return view(Theme::getCurrent() . "::app.users.index", compact('data'));
    }

    public function show($id)
    {
        $data = [
            'page' => [
                'title' => 'Профиль пользователя',
                'class' => 'sidebar-xs'

            ],
            'slug' => 'user_profile',
            'user' => User::findOrFail($id)
        ];

        return view(Theme::getCurrent() . "::app.users.show", compact('data'));
    }
}
