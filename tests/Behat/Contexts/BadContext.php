<?php

namespace Tests\Behat\Contexts;

use Behat\Behat\Context\Context;
use Behat\Behat\Tester\Exception\PendingException;

class BadContext implements Context
{

    /**
     * @When /^I click on "\#add\-form input\[type=submit\]"$/
     */
    public function iClickOn($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then /^"\#basket ul"([^"]*)"jeans"$/
     */
    public function shallContain($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @Given I am on :arg1
     */
    public function iAmOn($arg1)
    {
        throw new PendingException();
    }



}
