# aki-no-ma

## Tech Stack

### BE-Laravel

Laravel is a chosen for the following:
- built in admin dashboard
- built in authentication
- built in role creation
- good db cli interaction

### FE-React

React was chosen for its industry relevance and ease of development

### DB-SQLLite

SQL Lite was chosen because of it's levety doesn't take too much space, this application wont have too much too many users

## Minimum Viable Features

### Admin

these are the minimum features that the **Admin** user role can perform

#### Create Menus

Admin can create Menus all the menus have associated menu items food items these menus have a time limit to prevent:
- users from creating orders during the delivery time range
- users from making infinite changes to their order before workers have time to make the order 

#### Create Menu Items

Admin can create menu items each menu item is associated with a food item that the worker can cook, these menu items should be able to combined into combo items so that admins can create menus that have combined items

#### Create Orders

Admin can create orders that have associated menu one to one relation and menu items that come from that menu, some reasons fo this:
- sometimes users don't want to go through the website the Admin should be able to create the order for them
- maybe if update order functionality isn't good enough we should be able to delete an order and then create a new one

#### Delete Orders

Admin should be able to delete any order at any time even archived historical orders

#### Update Orders

Admin should be able to update orders in case user directly requests changes this can also be times out if too close to the cook time

### Non-logged in User

#### Create Orders

- Can use SPA UI to create **Orders**

#### Update Order

- Maybe through a **one time link**
- **30 min time limit** after order is made
