<?php

function currencyFormat ($str): string
{
    return number_format($str, 0, ',', ' ') . "₸";
}

function discountPercentage ($old_price, $new_price): string
{
    if ($old_price > $new_price) {
        return '-' . ceil(100 - (($new_price * 100) / $old_price)) . '%';
    } elseif ($old_price < $new_price) {
        return '+' . (ceil(100 - (($new_price * 100) / $old_price)) * -1) . '%';
    } else {
        return '0%';
    }
}