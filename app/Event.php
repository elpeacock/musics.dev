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

      'band' =>'required|max:255',
      'venue' =>'required|max:255',
      'time' =>'required',
			'price' => 'required',
			'description' => 'required|max:255',
      'tickets' => 'required',
		];
    public function user(){
        return $this->belongsTo(User::class, 'created_by');
    }
    public static function upcomingEvents()
    {
    	$currentDate = Carbon::now();
    	return Event::where('date', '>=', $currentDate)->orderBy('date', 'asc');

	public function band()
    {
        return $this->hasOne('App\Band', 'owner_id');
    }
}
@else
    <div hidden>{!! redirect('auth/login') !!}</div>
@endif
@stop
