<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelBook extends Model
{
    protected $table='book';
    protected $fillable=['title','id_gender','pages','price'];

    public function relGenders(){
        return $this->hasOne('App\Models\ModelGender','id','id_gender');
    }
}
