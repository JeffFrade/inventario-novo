<?php

namespace App\Http;

use App\Core\Support\Controller;
use App\Services\EquipmentService;
use App\Services\EquipmentTypeService;
use App\Services\RoomService;
use Illuminate\Contracts\Support\Renderable;
use function view;

class DashboardController extends Controller
{
    /**
     * @var EquipmentService
     */
    private $equipmentService;

    /**
     * @var EquipmentTypeService
     */
    private $equipmentTypeService;

    /**
     * @var RoomService
     */
    private $roomService;

    /**
     * @param EquipmentService $equipmentService
     * @param EquipmentTypeService $equipmentTypeService
     * @param RoomService $roomService
     *
     * @return void
     */
    public function __construct(
        EquipmentService $equipmentService,
        EquipmentTypeService $equipmentTypeService,
        RoomService $roomService
    )
    {
        $this->equipmentService = $equipmentService;
        $this->equipmentTypeService = $equipmentTypeService;
        $this->roomService = $roomService;
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index(): Renderable
    {
        $totalEquipmentsIndex = $this->equipmentService->countAllEquipments();
        $totalEquipmentTypesIndex = $this->equipmentTypeService->countAllEquipmentTypes();
        $totalRoomsIndex = $this->roomService->countAllRooms();

        return view('dashboard', with([
            'totalEquipmentsIndex' => $totalEquipmentsIndex,
            'totalEquipmentTypesIndex' => $totalEquipmentTypesIndex,
            'totalRoomsIndex' => $totalRoomsIndex
        ]));
    }
}
