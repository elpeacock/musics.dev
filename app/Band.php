<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers;

class Band extends Model
{
	protected $table = 'bands';

    // band to event relationship
	public function events()
    {
        return $this->hasMany('App\Event', 'band_id');
    }

    // band to user faves relationship
    public function usersFavorites()
    {
        return $this->belongsToMany('App\User', 'user_bands', 'band_id', 'user_id');
    }

    // band to genre relationship
    public function genres()
    {
        return $this->belongsTo('App\Genre', 'genre_id');
    }

    // band search function
    public static function searchBand($searchTerm)
    {
        return self::where('name', 'LIKE', '%' . $searchTerm . '%');
    }
}
