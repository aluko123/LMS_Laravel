<?php

namespace App\Repositories;

use App\Models\CourseUser;
use App\Repositories\BaseRepository;

class CourseUserRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'user_id',
        'course_id',
        'user_account_id',
        'paid_date',
        'expiry_date',
        'plan',
        'paid_amount',
        'status'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return CourseUser::class;
    }
}
