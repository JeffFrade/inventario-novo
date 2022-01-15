<?php

namespace App\Services;

use App\Repositories\RoomRepository;

class RoomService
{
    /**
     * @var RoomRepository
     */
    private $roomRepository;

    /**
     * @return void
     */
    public function __construct()
    {
        $this->roomRepository = new RoomRepository();
    }

    /**
     * @return int
     */
    public function countAllRooms(): int
    {
        return count($this->roomRepository->allNoTrashed());
    }
}
