<?php

use Carbon\Carbon;
namespace App\Models;
use App\Guzzle;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model {

    protected $table = 'rates';
    protected $dates = [
        'created_at',
        'updated_at',
        'update_date'
    ];
    public $incrementing = true;
    protected $casts = [
        'update_date' => 'date:Y-m-d'
    ];
    protected $fillable = array('from_id', 'to_id', 'ratio', 'update_date');

    public function currencies() 
    {
        return $this->belongsTo('App\Models\Currency', 'from_id', 'to_id', 'id');

    }

}
