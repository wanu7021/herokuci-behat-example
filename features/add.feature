# features/add.feature
Feature: Add
    As a person
    I need to provide two numbers
    Then the sum will be returned

Scenario: Sum of two provided numbers
    Given I provide the number 10 and the number 2
    When I add the numbers
    Then I should get 12

Scenario: Sum of two provided numbers
    Given I provide the number 55 and the number 45
    When I add the numbers
    Then I should get 100