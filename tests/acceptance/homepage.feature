Feature: Homepage
  Check home page rendering

  Scenario: try homepage
    Given I am on "/"
    Then I should see "Hello World"

  Scenario: try homepage bob
    Given I am on "/?name=bob"
    Then I should see "Hello bob"
