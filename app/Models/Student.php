<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $primaryKey = 'id';

    
    //set attibutes (Mutator) in any value
    public function setNameAttribute($data){
        $this->attributes['name'] = ucwords($data);
    }

    //get attibutes (Accessor) in any value
    public function getCreatedAtAttribute($data){
        return date("d-M-Y", strtotime($data));
    }
}
