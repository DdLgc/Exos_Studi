<?php

require_once 'PriceFormatter.php';

final class EUFormatter implements PriceFormatter
{
  public function format(float $price): string
  {
    return $price.' €';
  }
}