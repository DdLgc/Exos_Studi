<?php

require_once 'User.php';

class Seller extends User
{
  public Company $company;


  public function __construct(string $username, string $email, Company $company)
  {
    parent::__construct($username, $email);
    $this->company = $company;
  }

  public function getDisplayName(): string
  {
    return $this->company->name.' - '.parent::getDisplayName();
  }

}