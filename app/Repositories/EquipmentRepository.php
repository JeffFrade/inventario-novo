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

    /**
     * @return mixed
     */
    public function equipmentByTypeCount()
    {
        return $this->model->join('equipments_types', 'equipments.id_type', '=', 'equipments_types.id')
            ->select('equipments_types.type')
            ->selectRaw('COUNT(*) AS total')
            ->groupBy('id_type')
            ->get();
    }

    /**
     * @return mixed
     */
    public function equipmentByRoomCount()
    {
        return $this->model->join('rooms', 'equipments.id_room', '=', 'rooms.id')
            ->select('rooms.room')
            ->selectRaw('COUNT(*) AS total')
            ->groupBy('id_room')
            ->get();
    }
}
