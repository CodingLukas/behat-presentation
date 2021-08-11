<?php

namespace Tests\Behat\Contexts;

use Behat\Behat\Context\Context;
use Behat\Behat\Tester\Exception\PendingException;

class GoodContext implements Context
{
    /**
     * @When /^I click on add to cart button$/
     */
    public function iClickOnAddToCartButton()
    {
        throw new PendingException();
    }

    /**
     * @Then /^basket shall contain "([^"]*)"$/
     */
    public function basketShallContain($arg1)
    {
        throw new PendingException();
    }
}
