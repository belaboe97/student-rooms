<?php

namespace App\Repositories;

use App\Models\rooms;
use App\Repositories\BaseRepository;

/**
 * Class roomsRepository
 * @package App\Repositories
 * @version May 2, 2020, 7:50 pm UTC
*/

class roomsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'adress',
        'price',
        'ownerid',
        'image',
        'description',
        'roomtype',
        'title'
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
        return rooms::class;
    }
}
