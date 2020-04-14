<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class rooms
 * @package App\Models
 * @version April 14, 2020, 10:03 am UTC
 *
 * @property \App\Models\Owner ownerid
 * @property \Illuminate\Database\Eloquent\Collection bookings
 * @property string adress
 * @property integer price
 * @property integer ownerid
 * @property string image
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
        'image'
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
        'image' => 'string'
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function ownerid()
    {
        return $this->belongsTo(\App\Models\Owner::class, 'ownerid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function bookings()
    {
        return $this->hasMany(\App\Models\Booking::class, 'idroom');
    }
}
