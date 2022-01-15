<?php

namespace App\Repositories;

use App\Core\Support\AbstractRepository;
use App\Repositories\Models\Equipment;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

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
     * @return Builder[]|Collection
     */
    public function equipmentByTypeCount()
    {
        return $this->model->with(['type'])
            ->groupBy('id_type')
            ->get();
    }
}
