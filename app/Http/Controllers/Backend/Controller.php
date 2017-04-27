<?php

namespace LaravelBoilerplate\Http\Controllers\Backend;

use Illuminate\Routing\Controller as BaseController;

abstract class Controller extends BaseController
{
    public function __contstruct() {
        $this->middleware('auth');
    }
}
