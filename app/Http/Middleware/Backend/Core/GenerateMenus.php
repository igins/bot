<?php

namespace App\Http\Middleware\Backend\Core;

use Closure;

class GenerateMenus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        \Menu::make('mainSidebarMenu', function ($m) {
            $m->group(['prefix'=>'backend'], function($menu){
                $menu->add('Меню')->data('type', 'header');
                $menu->add('Панель управления', '/')->data('icon', 'icon-home4')->active("backend");
                $menu->add('Настройки', 'settings') ->data('icon', 'icon-cogs') ->active("backend/settings/*");
                $menu->add('Пользователи', 'users') ->data('icon', 'icon-users')->active("backend/users/*");
            });
        });

        return $next($request);
    }
}
