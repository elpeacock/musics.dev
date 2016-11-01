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
        return $this->belongsTo('App\Band');
    }

    public function venue()
    {
        return $this->belongsTo('App\Venue');
    }

    public function rsvp()
    {
        return $this->hasMany('App\Event', 'id');
    }

    public static function searchEventsByBandOrDate($searchTerm)
    {
        return static::join('bands', 'bands.id', '=', 'events.band_id')->where('bands.name', 'LIKE', "%{$searchTerm}%")->orWhere('events.event_time', 'LIKE', "%{$searchTerm}%")->select('*', 'events.id as id');
    }

// protected $fillable = ['band_id', 'venue_id', 'price', 'event_time', 'buy_tickets'];

}
