<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
    public function index()
    {
        return view('admin/hummasoft');
    }
    public function axelbit()
    {
        return view('admin/axelbit');
    }
}
