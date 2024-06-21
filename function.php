<?php

function random_password($length)
{
    $lower_case = 'abcdefghilmnopqrstuvwxyz';
    $upper_case = 'ABCDEFGHILMNOPQRSTUVWXYZ';
    $digits = '1234567890';
    $symbols = '!@#$%^&*?';

    $all_characters = str_shuffle($lower_case . $upper_case . $digits . $symbols);

    $password = substr(str_shuffle($lower_case), 0, 1);
    $password .= substr(str_shuffle($upper_case), 0, 1);
    $password .= substr(str_shuffle($digits), 0, 1);
    $password .= substr(str_shuffle($symbols), 0, 1);

    $remaining_length = $length - 4;
    $password .= substr($all_characters, 0, $remaining_length);

    return str_shuffle($password);
}
