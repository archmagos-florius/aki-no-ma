workspace 'aki-no-ma' 'food ordering app' {
    model {
        # Actors
        user = person "User" "Food orderer" "user"
        admin = person "Admin" "Dashboard Admin" "user"

        # External Systems
        # do we have any?


        foodOrderingSystem = softwareSystem "aki-no-ma" "food ordering app" {
            menuUIContainer = container "Menu UI" "Ordering web pages" "Laravel" "frontend"
            adminDashboardUIContainer = container "Admin Dashboard" "Order management page" "Laravel" "frontend"
            dbContainer = container "Database" "Food Ordering storage" "SQLite" "database"
            apiContainer = container "API" "REST API" "Laravel" {}
        }
    }
}
