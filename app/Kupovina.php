<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kupovina extends Model
{
    protected $table = "kupovina";
    public $timestamps = false;

    public function proizvod()
    {
        return $this->belongsTo(Proizvod::class);
    }
}
