<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class roomrating
 * @package App\Models
 * @version May 1, 2020, 11:40 pm UTC
 *
 * @property \App\Models\Room roomid
 * @property integer rating
 * @property integer roomid
 */
class roomrating extends Model
{

    public $table = 'roomrating';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'rating',
        'roomid'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'rating' => 'integer',
        'roomid' => 'integer',
        'id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'rating' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function roomid()
    {
        return $this->belongsTo(\App\Models\Room::class, 'roomid');
    }
}
