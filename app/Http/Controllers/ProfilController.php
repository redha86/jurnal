<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfilModel;

class ProfilController extends Controller
{   
    public function __construct()
    {
        $this->ProfilModel = new ProfilModel();
    }
   
    public function index()
    {
        $data = [
            'profil' => $this->ProfilModel->allData(),
        ];
        return view('profil');
    }

    public function jurnal()
    {
        return view('/jurnal');
    }
}
