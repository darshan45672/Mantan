<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'college_id', 'department_id', 'designation', 'qualification', 'experience', 'specialization', 'joining_date', 'leaving_date', 'status', 'is_cordinator'];
}
