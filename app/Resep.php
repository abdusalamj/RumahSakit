<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    public function getDokter()
    {
    	return $this->BelongsTo("App\Dokter", "dokter_id", "id")->select('nama_dokter');
    }

    public function getPasien()
    {
    	return $this->BelongsTo("App\pasien", "pasien_id", "id")->select('nama');
    }

    public function getObat()
    {
    	return $this->BelongsTo("App\Obat", "obat_id", "id")->select('nama');
    }
}
