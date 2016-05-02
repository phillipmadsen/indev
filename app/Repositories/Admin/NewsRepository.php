<?php

namespace App\Repositories\Admin;

use App\Models\Admin\News;
use InfyOm\Generator\Common\BaseRepository;

class NewsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'slug'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return News::class;
    }
}
