<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    use HasFactory;
    //using hasmany verb one to many
    public function admin(){
    return $this->hasMany(user::class,'adminId');
    }

    //using eloquent
    // public function assignedCourses(){
    //     return Course::where('teacherId', $this->id)->get();
    // }
}
