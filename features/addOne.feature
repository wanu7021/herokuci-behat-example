# features/add.feature
Feature: AddOne
    As a person
    I need to provide a number
    Then the number plus one will be returned

Scenario: Add one to a number
    Given I provide the number 9
    When I add one to the number
    Then I should get 10