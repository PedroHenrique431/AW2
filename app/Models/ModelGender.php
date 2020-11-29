<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelGender extends Model
{
    protected $table='gender';
    protected $fillable=['name'];

    public function relBooks(){
        return $this->hasMany('App\Models\ModelBook','id_gender');
    }
}


