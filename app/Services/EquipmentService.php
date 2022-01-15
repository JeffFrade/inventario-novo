<?php

namespace App\Services;

use App\Repositories\EquipmentRepository;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

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

    /**
     * @return Builder[]|Collection
     */
    public function equipmentByTypeChart()
    {
        return $this->equipmentRepository->equipmentByTypeCount();
    }
}
