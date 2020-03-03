<?php

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

// Erpdashboards
Breadcrumbs::for('erp.dashboard', function ($trail) {
    $trail->push('Dashboard', route('erp.dashboard'));
});
