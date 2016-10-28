<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers;

class Band extends Model
{
	protected $table = 'bands';

	public function events()
    {
        return $this->hasMany('App\Event', 'band_id');
    }

}
