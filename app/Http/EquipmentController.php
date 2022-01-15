<?php

namespace App\Http;

use App\Core\Support\Controller;
use App\Services\EquipmentService;
use Illuminate\Http\JsonResponse;

class EquipmentController extends Controller
{
    /**
     * @var EquipmentService
     */
    private $equipmentService;

    /**
     * @return void
     */
    public function __construct()
    {
        $this->equipmentService = new EquipmentService();
    }

    /**
     * @return JsonResponse
     */
    public function equipmentByTypeChart(): JsonResponse
    {
        return response()->json(['data' => $this->equipmentService->equipmentByTypeChart()]);
    }
}
