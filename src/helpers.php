<?php

function bloodGroupOptions(): array
{
    return [
        'A+'    => 'A+',
        'B+'    => 'B+',
        'AB+'   => 'AB+',
        'O+'    => 'O+',
        'A-'    => 'A-',
        'B-'    => 'B-',
        'AB-'   => 'AB-',
        'O-'    => 'O-'
    ];
}

function religionOptions(): array
{
    return [
        'Islam'         => 'Islam',
        'Christianity'  => 'Christianity',
        'Hinduism'      => 'Hinduism',
        'Buddhism'      => 'Buddhism',
        'Other'         => 'Other'
    ];
}

function genderOptions(): array
{
    return [
        'Male'  => 'Male',
        'Female'=> 'Female',
        'Other' => 'Other'
    ];
}