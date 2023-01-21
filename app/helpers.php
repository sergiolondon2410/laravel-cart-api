<?php

function price_on_cents($price)
{
    $short_price = round($price, 2);
    $cents_price = round($short_price * 100, 0);
    return intval($cents_price);
}

function convert_to_array($data)
{
    
}