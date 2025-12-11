# Food Ordering App (Aki'noma)

## User
- Generic system actor who interacts with the application
- a user may have one or more roles such as Admin
- if user is not elevated to admin
    - may create orders and maintain a personal cart
    - can maintain several addresses associated with that account
    - can be entered into a draw to win raffle prizes


## Admin
- A user with the special role of Admin
- these users are responsible for the management of orders
    - create, modify and schedule menus
    - manage menu items, including delivery pricing and availability
    - assign orders to admin users


## Cart
- A cart may belong to a guest un logged in User
- Cart contains a list of menu items
- carts may have statuses such as:
    - active
    - merged
    - expired
- at checkout cart converted to order

## Order
- a confirmed request for one or more items to be delivered to a specific Address
- orders can have:
    - multople order items
    - stores delivery details
    - has defined lifecycle with statuses pending -> assigned -> delivered -> paid
- Linked to a menu if the order originates from an active menu

## Order lifecycle
- Order can take on multiple statuses
- pending
    - order is placed and awaiting assignment
- assigned
    - order is acknowledged and assigned to driver
- delivered
    - order has been delivered
- paid
    - order has been paid or at least marked as paid by a admin user

## Item
- a menu entity representing a product that can be sold
- items have a name, description, a image or images, and a base price
- items serve as the base for menu items and order items
- wont change dynamically during promotions only changes are made when being added to a menu as a menu item

## Menu
- list of items configured by an admin available for ordering during a defined time window
- menus have:
    - delivery time range
    - delivery price/fee
    - can be cloned and reused
    - can de edited only before delivery window
    - contains menu items with spefici menu attributes
## MenuItems
- menu specific version of an item with attributes speficic to a Menu
- menu items can have:
    - a price that overrides the base price of the item
    - can appear in multiple menus
    - a quantity threshold to activate sold out feature
    - represents what user sees when browsing the site

## OrderItems
- Item entry within an order, representing final purchased item configuration
- order items have:
    - quantity of item in order
    - captures price taken for the specific order value frozen from menu
    - could optionally include modifiers like notes

## Notifications
- System generated message sent ot users to communicate event driven updates
- triggered by:
    - menu creation and availability
    - order status changes
    - payment confirmations
    - missing payment reminders
- target:
    - regular users
    - admins

## Address
- physical delivery address associated with a use used when creating orders
- address will include
    - city
    - postal code
    - country
    - address1 -> regular street
    - address2 -> for units
- selected during checkout

## Delivery window:
- time period during which orders are being fulfilled and all orders have been assigned to drivers
- field determines:
    - when user should expect their food to arrive
    - when admins can no longer edit the menu
    - when users can no longer edit their orders

## Order Window
- time period during which orders can be placed using the user interface
- field determines
    - when user can create orders
    - when user can edit existing orders
    - when admins can edit a menu

## Raffle
- raffles are prizes that an admin can create
- raffles will have:
    - end which is a time in the future where raffle entries will be tallied
    - name which is a title for what is being given away at the raffle
    - description of the prize being raffled
    - optional threshold meaning only users with entries with amounts higher than a value can be considered
- worker will look for raffles that have been completed and execute a program to tally votes and randomly decide a winner

## Raffle entries
- raffle entries are associated with a particular raffle for a particular user
- raffle entries have:
    - amount of entries for user for a raffle
    - a user id
    - a raffle id
- raffle entries amounts increased when:
    - user creates an order
    - user registers for the app while a raffle is going on counts as 2 entries

