<?php

namespace Fatnaydev\Erpdashboard\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Routing\Controller as BaseController;

class ErpDashboardController extends BaseController {

    public function __invoke()
    {
        return Inertia::render('Package/fatnaydev/erpdashboard/Dashboard');
    }

}