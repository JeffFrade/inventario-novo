<?php

namespace App\Core\Support\Traits;

trait Chart
{
    /**
     * @param array $labels
     * @param array $data
     * @return array
     */
    private function chartResponse(array $labels, array $data): array
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
    protected function pieChartResponse(array $labels, array $data): array
    {
        return $this->chartResponse($labels, $data);
    }

    /**
     * @param array $labels
     * @param array $data
     * @return array
     */
    protected function doughnutChartResponse(array $labels, array $data): array
    {
        return $this->chartResponse($labels, $data);
    }

    /**
     * @param array $labels
     * @param array $data
     * @return array
     */
    protected function barChartResponse(array $labels, array $data): array
    {
        return $this->chartResponse($labels, $data);
    }

    /**
     * @param array $labels
     * @param array $data
     * @return array
     */
    protected function lineChartResponse(array $labels, array $data): array
    {
        return $this->chartResponse($labels, $data);
    }
}
