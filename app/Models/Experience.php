<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'EmpID',
        'Employer1Name',
        'Employer1Designation',
        'Employer1CTC',
        'Employer1WorkDuration',
        'Employer2Name',
        'Employer2Designation',
        'Employer2CTC',
        'Employer2WorkDuration',
        'Employer3Name',
        'Employer3Designation',
        'Employer3CTC',
        'Employer3WorkDuration',
    ];
}
