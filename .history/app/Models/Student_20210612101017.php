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
    public function mark()
    {
        return $this->hasMany('App\Mark');
        $marks = App\Student::find(1)->mark()->get();
    }
}
