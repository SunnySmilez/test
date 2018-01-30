<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request     as Request;
use Illuminate\Http\Response    as Response;

class InviteController extends \App\Http\Controllers\Controller {
    public function __construct() {
        //在控制器指定中间件
        //$this->middleware('test');
    }

    public function getAdd() {
    }
}