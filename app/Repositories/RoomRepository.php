<?php

namespace App\Repositories;

use App\Core\Support\AbstractRepository;
use App\Repositories\Models\Room;

class RoomRepository extends AbstractRepository
{
    /**
     * @return void
     */
    public function __construct()
    {
        $this->model = new Room();
    }
}
