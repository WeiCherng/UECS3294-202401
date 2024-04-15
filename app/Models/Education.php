<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable = [
        'EmpID',
        'CoursePG',
        'SchoolCollegePG',
        'YearPassingPG',
        'PercentagePG',
        'CourseGra',
        'SchoolCollegeGra',
        'YearPassingGra',
        'PercentageGra',
        'CourseSSC',
        'SchoolCollegeSSC',
        'YearPassingSSC',
        'PercentageSCC',
        'CourseHSC',
        'SchoolCollegeHSC',
        'YearPassingHSC',
        'PercentageHSC',
    ];
}
