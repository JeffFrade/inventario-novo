<?php

namespace App\Services;

use App\Repositories\EquipmentTypeRepository;

class EquipmentTypeService
{
    /**
     * @var EquipmentTypeRepository
     */
    private $equipmentTypeRepository;

    /**
     * @return void
     */
    public function __construct()
    {
        $this->equipmentTypeRepository = new EquipmentTypeRepository();
    }

    /**
     * @return int
     */
    public function countAllEquipmentTypes(): int
    {
        return count($this->equipmentTypeRepository->allNoTrashed());
    }
}
