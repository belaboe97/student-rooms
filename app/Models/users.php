<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class users
 * @package App\Models
 * @version May 3, 2020, 3:52 pm UTC
 *
 * @property \App\Models\Role role
 * @property \Illuminate\Database\Eloquent\Collection bookings
 * @property \Illuminate\Database\Eloquent\Collection role1s
 * @property \Illuminate\Database\Eloquent\Collection paymentdetails
 * @property string name
 * @property string email
 * @property string|\Carbon\Carbon email_verified_at
 * @property string password
 * @property string remember_token
 * @property string avatar
 * @property integer role_id
 * @property string settings
 */
class users extends Model
{

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'remember_token',
        'avatar',
        'role_id',
        'settings'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'remember_token' => 'string',
        'avatar' => 'string',
        'role_id' => 'integer',
        'settings' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function role()
    {
        return $this->belongsTo(\App\Models\Role::class, 'role_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function bookings()
    {
        return $this->hasMany(\App\Models\Booking::class, 'iduser');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function role1s()
    {
        return $this->belongsToMany(\App\Models\Role::class, 'user_roles');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function paymentdetails()
    {
        return $this->hasMany(\App\Models\Paymentdetail::class, 'userid');
    }
}
