<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentDetail extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function mark() {
        return $this->hasMany(StudentMarkDetail::class);
    }

    public function markOne() {
        return $this->belongsTo(StudentMarkDetail::class);
    }

    public function children()
    {
        return $this->hasMany(StudentMarkDetail::class, 'student_id', 'id');
    }
}
