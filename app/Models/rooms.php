<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class rooms
 * @package App\Models
 * @version May 2, 2020, 7:50 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection roomratings
 * @property \Illuminate\Database\Eloquent\Collection bookings
 * @property string adress
 * @property integer price
 * @property integer ownerid
 * @property string image
 * @property string description
 * @property string roomtype
 * @property string title
 */
class rooms extends Model
{

    public $table = 'rooms';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'adress',
        'price',
        'ownerid',
        'image',
        'description',
        'roomtype',
        'title'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'adress' => 'string',
        'price' => 'integer',
        'ownerid' => 'integer',
        'image' => 'string',
        'description' => 'string',
        'roomtype' => 'string',
        'title' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'adress' => 'required',
        'price' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function roomratings()
    {
        return $this->hasMany(\App\Models\Roomrating::class, 'roomid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function bookings()
    {
        return $this->hasMany(\App\Models\Booking::class, 'idroom');
    }
}
