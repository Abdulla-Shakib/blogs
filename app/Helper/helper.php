<?php
if (!function_exists('serialNumber')) {
    function serialNumber($data, $loop)
    {
        return $data->firstItem() + $loop->index;
    }
}

if (!function_exists('getStatus')) {
    function getStatus(): array
    {
        return [
            [
                'label' => 'Active',
                'value' => 1
            ],
            [
                'label' => 'Inactive',
                'value' => 0
            ],
        ];
    }
}