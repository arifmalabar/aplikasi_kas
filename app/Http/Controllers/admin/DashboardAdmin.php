<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\TemplateHandler;
use Illuminate\Http\Request;

class DashboardAdmin extends Controller
{
    public function index()
    {
        $data = array();
        return TemplateHandler::templateViewHandler('admin.dashboard', $data, "Dashboard");
    }
}
