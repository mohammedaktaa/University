<?php


function status()
{
    return [
        'Active' => adminTrans('home', 'Active'),
        'Deactive' => adminTrans('home', 'Deactive'),
    ];
}

function setting_type()
{
    return [
        'text' => adminTrans('home', 'text'),
        'textarea' => adminTrans('home', 'textarea'),
        'image' => adminTrans('home', 'image'),
    ];

}

function type()
{
    return [
        'Main' => adminTrans('home', 'main'),
        'Sub' => adminTrans('home', 'sub'),
    ];
}


function menuTarget()
{
    return [
        'blank' => adminTrans('home', 'blank'),
        'self' => adminTrans('home', 'self'),
    ];
}


function permissionType()
{
    return [
        'on' => adminTrans('home', 'on'),
        'off' => adminTrans('home', 'off'),
    ];
}

function removeFromArray($orignalArray, $expectArray)
{
    return array_values(array_diff($orignalArray, $expectArray));
}

function rename_keys($array, $replacement_keys)
{
    if (count($replacement_keys) > 0) {

        foreach ($replacement_keys as $key => $replacement_key) {
            if (array_key_exists($key, $array))
                return array_combine(array_values($replacement_keys), array_values($array));
            else
                Alert::error('This array doesn\'t have those keys');
        }
    }
}
