<?php

namespace App\Repositories;

use App\Models\owners;
use App\Repositories\BaseRepository;

/**
 * Class ownersRepository
 * @package App\Repositories
 * @version May 2, 2020, 2:26 pm UTC
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
        'email',
        'id'
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
