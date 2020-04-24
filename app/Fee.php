<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    public function students()
    {
        return $this->belongsTo('App\students', 'student_number','student_number');
    }

}
