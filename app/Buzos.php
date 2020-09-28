<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buzos extends Model
{
    public $incrementing = true;
    protected $table = 'Buzos';
    protected $primaryKey = "Buzos_id";

    public function score(){
        return $this->hasOne("App/Score");

    }
}