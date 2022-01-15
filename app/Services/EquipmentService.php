<?php

namespace App\Services;

use App\Core\Support\Traits\Chart;
use App\Repositories\EquipmentRepository;

class EquipmentService
{
    use Chart;

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
     * @return array
     */
    public function equipmentByTypeChart(): array
    {
        $data = collect($this->equipmentRepository->equipmentByTypeCount());

        $labels = $data->pluck('type')->toArray();
        $total = $data->pluck('total')->toArray();

        return $this->doughnutChartResponse($labels, $total);
    }

    /**
     * @return array
     */
    public function equipmentByRoomChart(): array
    {
        $data = collect($this->equipmentRepository->equipmentByRoomCount());

        $labels = $data->pluck('room')->toArray();
        $total = $data->pluck('total')->toArray();

        return $this->barChartResponse($labels, $total);
    }
}
