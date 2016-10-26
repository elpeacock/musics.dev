<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

	public function band()
    {
        return $this->hasOne('App\Band', 'owner_id');
    }
}
