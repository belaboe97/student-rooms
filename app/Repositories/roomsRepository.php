<?php

namespace App\Repositories;

use App\Models\rooms;
use App\Repositories\BaseRepository;

/**
 * Class roomsRepository
 * @package App\Repositories
 * @version April 14, 2020, 10:03 am UTC
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
        'image'
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
