<?php

namespace Tests\Acceptance\Contexts;

use Behat\Behat\Context\Context;
use Behat\Behat\Hook\Scope\AfterScenarioScope;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BaseContext extends TestCase implements Context
{
    //use LaravelAware;
    use RefreshDatabase;

    private string $salaryMatchName;

    public function __construct(string $name)
    {
        $_ENV['APP_ENV'] = 'testing';
        parent::setUp();
        parent::__construct(name: $name);
    }

    /**
     * @AfterScenario
     */
    public function cleanup(AfterScenarioScope $scope): void
    {
        $this->tearDown();
    }
}
