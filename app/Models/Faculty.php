<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'college_id', 'department_id', 'designation', 'qualification', 'experience', 'specialization', 'joining_date', 'leaving_date', 'status', 'is_cordinator'];

    protected $casts = [
        'qualification' => 'array',
        'specialization' => 'array',
    ];
    
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function college(){
        return $this->belongsTo(College::class);
    }

    public function department(){
        return $this->belongsTo(Department::class);
    }

    public function hods(){
        return $this->hasMany(Hod::class);
    }
}
