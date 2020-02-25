<?php

namespace Modules\MasterData\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class MasterDataController extends Controller
{
    public function index()
    {
        return abort(404);
    }
}
