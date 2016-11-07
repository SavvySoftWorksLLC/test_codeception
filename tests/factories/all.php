<?php

use League\FactoryMuffin\Faker\Facade as Faker;
 
// FactoryMuffin::define('Nothing', array(
//   'nothing' => 'buttNothingSomething'
// ));

$fm->define('App\Nothing')->setDefinitions([
  'nothing' => 'buttNothingSomething'
]);
