<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateHandler extends Controller
{
    public static function templateViewHandler($nama_view, $data, $judul)
    {
        $data['judul'] = $judul;
        return view($nama_view, $data);
    }
}
