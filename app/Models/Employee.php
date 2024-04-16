<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    public $table="employeedetail";

    public function education(){
        return $this->hasOne('App\Models\Education');
    }
}
