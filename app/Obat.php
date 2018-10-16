<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    public function JenisObat() {
    	return $this->belongsTo('App\JenisObat', 'id_jenis', 'id');
    }
}
