<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    // Table Name
    protected $table = 'courses';
    
    /* Belongs to User */
    public function user(){
        return $this -> belongsTo('App\User');
    }

    /* Belongs to Semester */
    public function semester(){
        return $this -> belongsTo('App\Semester');
    }

    /* Has many announcements */
    public function announcements(){
        return $this -> hasMany('App\Announcement');
    }

    /* Has many assignments */
    public function assignments(){
        return $this -> hasMany('App\Assignment');
    }

    /* Has many usercourses */
    public function usercourses(){
        return $this->hasMany('App\UserCourses');
    }
}
