<?php

function array_value($func, $arrVal)
{
    $get_Value = $func;
    return $get_Value[$arrVal];
}

function status()
{
    return array(
        "1" => "<span class='badge badge-success'>Active</span>",
        "2" => "<span class='badge badge-danger'>Deactive</span>"
    );
}

function feature_type()
{
    return array(
        "1" => 'Facility',
        "2" => "Why Choose Us"
    );
}







