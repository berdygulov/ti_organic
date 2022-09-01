<?php

function currencyFormat ($str): string
{
    return number_format($str, 0, ',', ' ') . "₸";
}