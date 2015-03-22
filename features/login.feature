Feature: login
  In order to access the dashboard
  As a guest
  I need to be able to log in

Scenario: Log in to the application
  Given I am on "/auth/login"
  When I fill in "username" with "admin"
  And I fill in "password" with "test"
  And I press "login"
  Then I should see "admin"