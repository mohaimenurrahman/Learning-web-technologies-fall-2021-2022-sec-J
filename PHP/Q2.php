<?php


$vat = 15;
$priceExcludingVat = 10;


$vatToPay = ($priceExcludingVat / 100) * $vat;

echo number_format($vatToPay, 2);