<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
	
	protected $table = "courses";
	protected $fillable = ['id','course_text', 'updated_at', 'created_at'];
}
