<?php

namespace App\Repositories;

use App\Models\View;
use App\Repositories\BaseRepository;

class ViewRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'user_id',
        'user_account_id',
        'category_id',
        'course_id',
        'item_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return View::class;
    }
}
