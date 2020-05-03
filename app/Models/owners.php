<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class owners
 * @package App\Models
 * @version May 2, 2020, 2:26 pm UTC
 *
 * @property string adress
 * @property string name
 * @property string phone
 * @property string email
 * @property integer id
 */
class owners extends Model
{

    public $table = 'owners';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'owners_adress',
        'name',
        'phone',
        'email',
        'id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'owners_adress' => 'string',
        'name' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id' => 'required'
    ];

    
}
