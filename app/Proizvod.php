<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proizvod extends Model
{
    protected $table = "proizvod";
    public $timestamps = false;

    public function kupovine()
    {
        return $this->hasMany(Kupovina::class);
    }
    public function kategorija()
    {
        return $this->belongsTo(Kategorija::class);
    }

    public function ima_zaliha($kolicina)
    {
        if ($this->zalihe >= $kolicina) {
            return true;
        }
        return false;
    }

    public function smanji_zalihe($kolicina) {
        if($this->ima_zaliha($kolicina)) {
            $this->zalihe = $this->zalihe - $kolicina;
            $this->save();
            return true;
        }
        return false;
    }
}
