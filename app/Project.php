<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	public function tasks()
	{
		return $this->hasMany(Task::class);
	}
	
    public function getRouteKeyName()
    {
    	return 'slug';
    }
}
