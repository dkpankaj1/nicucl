<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Dashboard
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('dashboard'));
});

// Dashboard > Server
Breadcrumbs::for('server', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Server', route('server.index'));
});

