<?php

namespace Tests\Acceptance\Contexts;

use Behat\Behat\Tester\Exception\PendingException;

/**
 * Defines application features from the specific context.
 */
class ExampleContext extends BaseContext
{
    public function __construct()
    {
        parent::__construct(name: self::class);
    }

    /**
     * @Given there are zero users
     */
    public function thereAreZeroUsers()
    {
        throw new PendingException();
    }

    /**
     * @When I register as a user
     */
    public function iRegisterAsAUser()
    {
        throw new PendingException();
    }

    /**
     * @Then I should have :arg1 registered user
     */
    public function iShouldHaveRegisteredUser($arg1)
    {
        throw new PendingException();
    }

}
