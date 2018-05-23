# features/add.feature
Feature: add
    As a person
    I need to provide two numbers
    Then the sum will be returned

Scenario: Sum of two provided numbers
    Given I provide the number 10 and the number 2
    When I add the numbers
    Then I should get 12