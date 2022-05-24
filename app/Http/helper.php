<?php

use App\Models\Option;
// generating token fucntion

function generateToken()
{
    $option = Option::where('name', 'token')->first();
    $option->value = $option->value + 1;
    $option->save();
    return $token = sprintf('%05d', $option->value);
}
