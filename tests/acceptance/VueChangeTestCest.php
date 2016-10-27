<?php


class VueChangeTestCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->wantTo('Click React input box and then click Cancel button');
        $I->amOnPage('test3');
        $I->see('OMFGulp!');
        $I->see('The button above has been clicked 0 times.');
        $I->click('Add 1');
        $I->see('The button above has been clicked 1 times.');
        $I->click('Add 1');
        $I->see('The button above has been clicked 2 times.');
    }
}
