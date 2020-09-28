<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    public $incrementeing = true;
    protected $table = "ClothesScore";
    protected $primaryKey = "Score_id";
    
    public function Buzo(){
        return $this->belongsTo("App/Buzos");
    }
}
