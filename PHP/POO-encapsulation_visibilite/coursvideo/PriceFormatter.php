<?php

interface PriceFormatter
{
  public function format(float $price): string;
}