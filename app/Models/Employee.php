<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    public $table="users";
    
    //Specify the custom timestamp field name
    const CREATED_AT = 'PostingDate';
    const UPDATED_AT = 'PostingDate';

    public function education(){
        return $this->hasOne(Education::class);
    }

    public function getExperience() {
        return $this->hasOne('App\Models\Experience');
    }
}
