Feature: Registering user

    Rule: Any user can register

    Scenario: Register a user
        Given there are zero users
        When I register as a user
        Then I should have 1 registered user
