Feature: Homepage
  Check home page rendering

  Scenario: try homepage
    Given I am on "/hello"
    Then I should see "Hello World"

  Scenario: try homepage bob
    Given I am on "/hello/bob"
    Then I should see "Hello, Bob Marley"

