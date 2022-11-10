<?php

include 'PriceFormatter.php';

final class USFormatter implements PriceFormatter
{
  public function format(flat $price): string
  {
    return '$'.$price;
  }
}