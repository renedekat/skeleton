<?php

namespace Tests\Acceptance\Contexts;

use Behat\Behat\EventDispatcher\Event\BeforeScenarioTested;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\MinkExtension\Context\MinkContext;
use Cevinio\Behat\Context\LaravelAware;
use Cevinio\Behat\Context\LaravelAwareContext;
use Illuminate\Contracts\Foundation\Application;

/**
 * Defines application features from the specific context.
 */
class ExampleContext extends MinkContext implements LaravelAwareContext
{
    use LaravelAware;

    public function bootstrapLaravelEnvironment(BeforeScenarioTested $event): array
    {
        // This method is optional, if implemented the returned array is set in the Laravel environment for access via env().
        // This allows modification of configuration values on a per-scenario basis.
        return [];
    }

    public function bootstrapLaravelApplication(Application $app, BeforeScenarioTested $event): void
    {
        // This method is optional. It allows access to the Application right after it was created.
        // This allows for example to call $app->bind() before any @BeforeScenario hook is called.
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
