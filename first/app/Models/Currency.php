<?php

use Carbon\Carbon;
namespace App\Models;
use App\Guzzle;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model {
    
    protected $table = 'currencies';
    protected $dates = [
        'created_at',
        'updated_at'
    ];
    public $incrementing = true;
    protected $fillable = array('values');

    public function rate() 
    {
        return $this->hasMany('App\Models\Rate');

    }



}
