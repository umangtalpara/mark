<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    // protected $table = 'student';
    // protected $fillable = [
    //     'student_name'
    // ];
    public function marks()
    {
        return $this->hasMany(Mark::class);
    }
}
