<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentMarkDetail extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function student() {
        return $this->belongsTo(StudentDetail::class);
    }

    public function studentOne() {
        return $this->hasMany(StudentDetail::class);
    }

    public function parent()
    {
        return $this->belongsTo(StudentDetail::class, 'student_id', 'id');
    }
}
