<?php

require_once 'Classes/User.php';
require_once 'Classes/Seller.php';
require_once 'Classes/Company.php';


function displayUsername(User $user): void
{
  echo 'Connecté en tant que :'.$user->getDisplayName();
}


function displayTooltip(Tooltipable $tooltipable): void
{
  echo'<div>
  <h3>'.$tooltipable->getTitle().'</h3>
  <p>'.$tooltipable->getDescription().'</p>
  </div>';
}
$user = new User(username:'John',email:'john@doe.fr');
$company = new Company(name:'SARL LaureD', address:'30 rue Dupont');
$seller = new Seller(username:'Laure', email:'laure@doe.fr', $company); //impossible de savoir pk cette merde fonctionne pas

displayTooltip($company);
displayTooltip($user);
displayTooltip($seller);