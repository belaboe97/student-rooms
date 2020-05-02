<?php

namespace App\Repositories;

use App\Models\roomrating;
use App\Repositories\BaseRepository;

/**
 * Class roomratingRepository
 * @package App\Repositories
 * @version May 1, 2020, 11:40 pm UTC
*/

class roomratingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'rating',
        'roomid'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return roomrating::class;
    }
}
