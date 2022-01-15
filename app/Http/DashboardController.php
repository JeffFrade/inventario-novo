<?php

namespace App\Http;

use App\Core\Support\Controller;
use App\Services\EquipmentService;
use Illuminate\Contracts\Support\Renderable;
use function view;

class DashboardController extends Controller
{
    /**
     * @var EquipmentService
     */
    private $equipmentService;

    /**
     * @param EquipmentService $equipmentService
     */
    public function __construct(EquipmentService $equipmentService)
    {
        $this->equipmentService = $equipmentService;
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index(): Renderable
    {
        $totalEquipmentsIndex = $this->equipmentService->countAllEquipments();

        return view('dashboard', with([
            'totalEquipmentsIndex' => $totalEquipmentsIndex
        ]));
    }
}
