# Food Ordering App (Aki'noma)

## Story numberal designations

### UC-0**: Unauthenticated user stories
- these are the stories for regular users either  logged in or not

### UC-1**: Authenticated user stories
- these are stories with executive access to the application with the power to manage all other aspects including orders/menus/etc

### UC-2**: Admin user stories
- these are stories for users with the driver role they have a subset of admin powers relating to order delivery

--

## UC-001: Sign up
- As a **user**, i want to be able to register for the website so that i can complete the checkout process quicker without having to to re renter my information every time

## UC-002: Create Guest Carts
- As a **user**, i want to be able to select items and add them into a persistent cart so that i can build my order with the items i want

## UC-003: Persistent Guest Cart
- As a **user**, i want my cart as guest to persist after login, so that i don't lose my selected items

## UC-003: Create Orders
- As a **user**, i want to be able take my guest cart and covert my guest cart into a full order, so that i can finalize and receive my selected items

## UC-004: Order Notifications
- As a **user**, i want to be able to get notifications on the current status of my order so that i can know at what lifecycle stage my order is in

## UC-005: Update Order
- As a **user**, i want to be able to get a link where i can make quick modifications to my order before the delivery window, so that i can correct my order if something is missing

## UC-006: Log in
- As a **user**, i want to be able to click a navigation link, so that i can enter my account edit my addresses and check on my order lifecycle

--

## UC-100: Order Dashboard
- As a **auth user**, i want to be able to have access to a dashboard where i can check the current state of any active orders, and past orders so that i can know my order and actively check at what stage of the lifecycle my order is currently at

## UC-101: Addresses Dashboard
- As a **auth user**, i want to be able to have access to a dashboard where i can manage my addresses attached to my account so that i can make sure the delivery information is up to date

## UC-102: Order Notifications
- As a **auth user**, i want to be able to receive notifications of the stage of the lifecycle my order is currently at so i can stay up to date where my order is at without having to log in

## UC-103: Raffle Entries
- As a **auth user**, i want to be able to receive raffle entries when i successfully regiser for the first time and for completing orders successfully so that i can be entered to win the raffle prize after it is announced

## UC-104: Raffle Win Notification
- As a **auth user**, i want to be able to be notified if i have won the raffle prize after the draw has concluded so i can know how to collect my prize and what the next steps are

## UC-105: Leave a review of an order
- As a **auth user** i want to be able to leave a review on any order that passed the delivery lifecycle step so that i can express my gratitude or lack thereof for the food i have purchased

--

## UC-200: Assign Orders
- As a **admin**, i want to be able to assign pending orders to myself and other **admin** users so i and other  **admin** users can have a smaller concentrated list of orders to fulfil

## UC-201: Edit Orders
- As a **admin**, i want to be able to have full access to an active order to be able to change status and all aspects of an order so that i can make last minute edits to an order if a customer asks for it

## UC-202: Create Menus
- As a **admin**, i want to be able to create menus and attach items so that users can order from this menu during a specified window of time

## UC-203: Edit Menus
- As a **admin**, i want to be able to edit an existing menu so that i can better  represent the products that i am trying to sell i should not be able to do this once a menu is active AKA during ordering window time

## UC-204: Create items
- As a **admin**, i want to be able to create good product representations so as to attach this entity to active menus and orders created from menus

## UC-205: Edit items
- As a **admin**, i want to be able to make adjustments to any items, so that i can better represent the items i am trying to sell

## UC-206: Notify users on new menu
- As a **admin** i want to be able to notify all users of the application that a new menu has been created, so that users can quickly access the menu and create orders

## UC-207: Notify users on order edits
- As a **admin** i want to be able to notify users that their orders have been edited whether thats assigning order or delivering order or receiving payment for an orde, so that user can be notified if anything new has happened to their order

## UC-208: Raffle draw
- As a **admin** i want to able to trigger the raffle draw to randomly select a user to win the raffle from the available raffle entries so that i can know who to give the prize to

## UC-209: Delete Items
- As a **admin** i wan to be able to delete an existing food product item, so that i can clean up items no longer eligible to be added to menus

## UC-210: Delete Menus
- As a **admin** i want to be able to deactivate and delete menus so that i can clean up the menus that are outdated

## UC-211: Delete Orders
- As a **admin** i want to be able to delete orders so that i can clean up user orders that are no longer valid or represent anything useful

## UC-212: Review user order reviews
- As a **admin** i want to be able to view any reviews that a user has left for their order under the further details of the order so that i can collect feedback on the items i am selling
