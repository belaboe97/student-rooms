<?php

namespace App\Repositories;

use App\Models\owners;
use App\Repositories\BaseRepository;

/**
 * Class ownersRepository
 * @package App\Repositories
 * @version April 30, 2020, 5:07 pm UTC
*/

class ownersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'adress',
        'name',
        'phone',
        'email'
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
        return owners::class;
    }
}
