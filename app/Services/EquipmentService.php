<?php

namespace App\Services;

use App\Repositories\EquipmentRepository;

class EquipmentService
{
    /**
     * @var EquipmentRepository
     */
    private $equipmentRepository;

    /**
     * @return void
     */
    public function __construct()
    {
        $this->equipmentRepository = new EquipmentRepository();
    }

    /**
     * @return int
     */
    public function countAllEquipments(): int
    {
        return count($this->equipmentRepository->allNoTrashed());
    }
}
