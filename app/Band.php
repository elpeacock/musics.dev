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

    public function usersFavorites()
    {
        return $this->belongsToMany('App\User', 'user_bands', 'band_id', 'user_id');
    }

    public static function searchByBand($searchTerm)
    {
    	return Band::where('name', 'LIKE', '%' . $searchTerm . '%');
    }


}
