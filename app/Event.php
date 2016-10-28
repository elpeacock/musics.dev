<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Event extends Model
{

    protected $table = 'events';
	public static function orderDesc($item) {
		return Event::with('user')->orderBy('created_at', 'desc')->paginate($item);
	}
	public function getDateAttribute($value) {
		$utc = new Carbon($value);
		return $utc;
	}
	public static $rules =
		[
      'band' =>'required|',
      'venue' =>'required',
      'time' =>'required',
			// 'price' => 'required',
      'tickets' => 'required',
		];
    public function user(){
        return $this->belongsTo(User::class, 'created_by');
    }
    public static function upcomingEvents()
    {
    	$currentDate = Carbon::now();
    	return Event::where('date', '>=', $currentDate)->orderBy('date', 'asc');
    }


	public function band()
    {
        return $this->hasMany('App\Band', 'id');
    }
  public function venue()
    {
        return $this->hasOne('App\Venue', 'id');
    }

  // protected $fillable = ['band_id', 'venue_id', 'price', 'event_time', 'buy_tickets'];

}
