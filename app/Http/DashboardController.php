<?php

namespace App\Http;

use App\Core\Support\Controller;
use App\Services\EquipmentService;
use App\Services\EquipmentTypeService;
use App\Services\RoomService;
use App\Services\UserService;
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
     * @var UserService
     */
    private $userService;

    /**
     * @param EquipmentService $equipmentService
     * @param EquipmentTypeService $equipmentTypeService
     * @param RoomService $roomService
     * @param UserService $userService
     *
     * @return void
     */
    public function __construct(
        EquipmentService $equipmentService,
        EquipmentTypeService $equipmentTypeService,
        RoomService $roomService,
        UserService $userService
    )
    {
        $this->equipmentService = $equipmentService;
        $this->equipmentTypeService = $equipmentTypeService;
        $this->roomService = $roomService;
        $this->userService = $userService;
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
        $totalUsersIndex = $this->userService->countAllUsers();

        return view('dashboard', with([
            'totalEquipmentsIndex' => $totalEquipmentsIndex,
            'totalEquipmentTypesIndex' => $totalEquipmentTypesIndex,
            'totalRoomsIndex' => $totalRoomsIndex,
            'totalUsersIndex' => $totalUsersIndex
        ]));
    }
}
