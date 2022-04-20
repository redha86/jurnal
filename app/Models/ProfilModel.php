<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class ProfilModel extends Model
{
   public function alldata()
   {
      return [
            [
                'nip' => '1234',
                'nama' => 'budi',
                'biologi' => 'biologi'
            ]
       ];
   }
}
