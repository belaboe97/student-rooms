<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class owners
 * @package App\Models
 * @version April 30, 2020, 5:07 pm UTC
 *
 * @property \App\Models\User id
 * @property \App\Models\User user1
 * @property \Illuminate\Database\Eloquent\Collection rooms
 * @property string adress
 * @property string name
 * @property string phone
 * @property string email
 */
class owners extends Model
{

    public $table = 'owners';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'adress',
        'name',
        'phone',
        'email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'adress' => 'string',
        'name' => 'string',
        'phone' => 'string',
        'email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function id()
    {
        return $this->belongsTo(\App\Models\User::class, 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function user1()
    {
        return $this->hasOne(\App\Models\User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function rooms()
    {
        return $this->hasMany(\App\Models\Room::class, 'ownerid');
    }
}
