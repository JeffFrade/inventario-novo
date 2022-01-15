<?php

namespace App\Core\Support\Traits;

trait Chart
{
    /**
     * @param array $labels
     * @param array $data
     * @return array
     */
    protected function pieChartResponse(array $labels, array $data): array
    {
        return [
            'labels' => $labels,
            'data' => $data
        ];
    }

    /**
     * @param array $labels
     * @param array $data
     * @return array
     */
    protected function doughnutChartResponse(array $labels, array $data): array
    {
        return $this->pieChartResponse($labels, $data);
    }
}
