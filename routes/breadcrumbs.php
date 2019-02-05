<?php

// Backend
Breadcrumbs::for('backend', function ($trail) {
    $trail->push(__("Панель управления"), route('backend.dashboard'));
});

// Users
Breadcrumbs::for('users', function ($trail) {
    $trail->parent('backend');
    $trail->push(__("Пользователи"), route('backend.users'));
});

// Users
Breadcrumbs::for('user_profile', function ($trail, $id) {
    $trail->parent('users');
    $trail->push(__("Профиль пользователя"), route('backend.users.show', $id));
});