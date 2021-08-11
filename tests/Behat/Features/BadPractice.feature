Feature: Product basket
    In order to buy products
    As a customer
    I need to be able to put interesting products into a basket

    Scenario: Buying a single product under £10
        Given I am on "/products/sith-lord-lightsaber"
        When I click on "#add-form input[type=submit]"
        Then "#basket ul" shall contain "jeans"
