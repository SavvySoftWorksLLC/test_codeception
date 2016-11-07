<?php

use League\FactoryMuffin\FactoryMuffin;
use League\FactoryMuffinFaker\Faker;

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
        static::$fm->loadFactories(__DIR__.'/../factories'); 
    }

    public function _after(AcceptanceTester $I)
    {
        // commented out to check that we are correctly filling the DB
        // static::$fm->deleteSaved(); 
    }

    // tests
    public function tryToTest3(AcceptanceTester $I)
    {
        $I->wantTo('Use factory muffin and test that it worked');
        $I->amOnPage('nothing');
        $I->see('Hey look at me!');
        $I->see('buttNothingSomething');
    }
}
