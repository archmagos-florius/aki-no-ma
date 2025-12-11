# Food Ordering App (Aki'noma)

## User
- A user who owns orders and carts on the database
- A user who owns addresses attached to their user account

## Cart
- A cart can own a list of items that the user has picked out w/o signing in
- A cart can have a variety of different statuses attached to it

## Order
- An order has the same list of items as the cart but with added information to where the order should be delivered to
- An order has its own set of unique statutes based on the part of the ordering flow it is a part of (pending/assigned/delivered/paid)

## Item
- items are the database model for essentially a menu item these items will have basic information attached to them like an image(s) , a description that will show on the frontend, a name and a base price to sell the item at
- items are owned at any one time by menus and orders

## Menu
- Menus are created by the admin they own a set of items to be promoted for a set amount of time for Ordering
- Menus own a time range for delivery of items that are ordered through any one menu
- Menus own a delivery price that the admin will set to add to the order during the checkout process
- Menus can be cloned and re used whenever necessary by the admin
- Menus can also be edited before the delivery window not during or after

## MenuItems
- MenuItems own a price that is set for that item based on the menu it is attached to this can be the same or different than the base price set in the original Item
- MenuItems can be added/owned by one or many menus
- Menu items also have a sold out attribute which dictates the amount we want to sell before we mark the item as sold out

## OrderItems
- order items are items that any particular order owns after the checkout process
- order items are
