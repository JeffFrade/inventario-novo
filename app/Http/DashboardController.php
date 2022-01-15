<?php

namespace App\Http;

use App\Core\Support\Controller;
use App\Services\EquipmentService;
use App\Services\EquipmentTypeService;
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
     * @param EquipmentService $equipmentService
     * @param EquipmentTypeService $equipmentTypeService
     *
     * @return void
     */
    public function __construct(EquipmentService $equipmentService, EquipmentTypeService $equipmentTypeService)
    {
        $this->equipmentService = $equipmentService;
        $this->equipmentTypeService = $equipmentTypeService;
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

        return view('dashboard', with([
            'totalEquipmentsIndex' => $totalEquipmentsIndex,
            'totalEquipmentTypesIndex' => $totalEquipmentTypesIndex
        ]));
    }
}
