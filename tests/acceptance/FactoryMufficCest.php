<?php

use League\FactoryMuffin\Faker\Facade as Faker;

class FactoryMufficCest
{
    protected static $fm;

    public function _before(AcceptanceTester $I)
    {
        // create a new factory muffin instance
        static::$fm = new FactoryMuffin();

        // you can customize the save/delete methods
        // new FactoryMuffin(new ModelStore('save', 'delete'));

        // load your model definitions
        static::$fm->loadFactories(__DIR__.'/factories/app.php'); 
    }

    public function _after(AcceptanceTester $I)
    {
        // static::$fm->deleteSaved();
        \League\FactoryMuffin\Facade::deleteSaved();
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->wantTo('Use factory muffin and test that it worked');
        $I->amOnPage('nothing');
        $I->see('buttNothingSomething');
    }
}
