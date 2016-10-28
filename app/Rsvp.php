<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rsvp extends Model
{
    protected $table = 'rsvps';
	protected $fillable = ['user_id', 'event_id'];
	
	public function user()
	{
		return $this->belongsTo('App\User', 'created_by', 'user_id');
	}
	public function event()
    {
        return $this->belongsTo('App\Event', 'event_id');
    }
}
