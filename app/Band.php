<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Band extends Model
{

	public function events()
    {
        return $this->hasMany('App\Event', 'band_id');
    }
}
