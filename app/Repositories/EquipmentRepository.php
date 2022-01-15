<?php

namespace App\Repositories;

use App\Core\Support\AbstractRepository;
use App\Repositories\Models\Equipment;

class EquipmentRepository extends AbstractRepository
{
    /**
     * @return void
     */
    public function __construct()
    {
        $this->model = new Equipment();
    }
}
