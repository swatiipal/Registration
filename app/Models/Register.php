<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Register extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "users";
    protected $primaryKey = "id";

    //Mutator
    public function setNameAttribute($value){
        $this->attributes['name'] = ucwords($value);
    }
    public function setAddressAttribute($value){
        $this->attributes['address'] = ucwords($value);
    }
    //Accessor
    public function getDobAttribute($value){
        return date('d-m-Y', strtotime($value));
    }
}
