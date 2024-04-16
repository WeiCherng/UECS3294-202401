<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    // public $table="empeducation";

    protected $fillable = [
        'CourseProgram',
        'Univeristy',
        'YearGraudate',
        'Cgpa',
        'Achivements',
    ];

    public function employee(){
        return $this->belongsTo(Employee::class);
    }
}
