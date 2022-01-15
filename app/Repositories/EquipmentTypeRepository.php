<?php

namespace App\Repositories;

use App\Core\Support\AbstractRepository;
use App\Repositories\Models\EquipmentType;

class EquipmentTypeRepository extends AbstractRepository
{
    /**
     * @return void
     */
    public function __construct()
    {
        $this->model = new EquipmentType();
    }
}
