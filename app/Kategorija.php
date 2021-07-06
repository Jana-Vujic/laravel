<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategorija extends Model
{
    protected $table = "kategorija";
    public $timestamps = false;

    public function proizvodi()
    {
        return $this->hasMany('App\Proizvod');
    }
}
