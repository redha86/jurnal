<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Siswa extends Model
{
    public function allData()
    {
        return DB::table('jurnal')->get();
    }

    public function addData($data)
    {
        return DB::table('jurnal')->insert($data);
    }
}
