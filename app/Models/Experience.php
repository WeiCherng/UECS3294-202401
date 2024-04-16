<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    // public $table="empexpireince";

    protected $fillable = [
        'CompanyName',
        'RoleDesignation',
        'Salary',
        'WorkDuration',
    ];

    public function employee(){
        return $this->belongsTo(Employee::class);
    }
}
