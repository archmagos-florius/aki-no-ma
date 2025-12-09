<?php

namespace Tests\Feature;

use App\Models\Order;
use App\Models\User;
use Tests\TestCase;

class CreateOrderTest extends TestCase
{
    /**
     * Testing order creation for logged in users
     */
    public function test_logged_in_user_can_create_a_post(): void
    {
        $user = User::factory()->create();
        [$item1, $item2, $item3] = Item::factory()->count(3)->create();
        $menu = Menu::factory()->create([
            'delivery_start' => '',
            'delivery_end' => '',
            'order_start' => '',
            'order_end' => '',
            'delivery_price' => 5.00,
        ]);
        $menu->items()->attach([
            ['item_id' => $item1->id, 'price' => 30.00],
            ['item_id' => $item2->id, 'price' => 20.00],
            ['item_id' => $item3->id, 'price' => 20.00],
        ]);
        $this->actingAs($user);
        $response = $this->post('/order', [
            'menu_id' => $menu->id,
            'name' => 'Test order',
            'address1' => 'Some street st.',
            'address2' => 'Unit 102',
            'postal_code' => 'V3C4H8',
            'city' => 'Vancouver',
            'province' => 'BC',
            'country' => 'Canada',
            'phone' => '6045001285',
            'email' => 'MHugoCflores93@gmail.com',
            'items' => [
                ['item_id' => $item1->id, 'quantity' => 2, 'price' => 30.00],
                ['item_id' => $item2->id, 'quantity' => 1, 'price' => 20.00],
                ['item_id' => $item3->id, 'quatity' => 1, 'price' => 20.00],
            ],
        ]);
        $response->assertStatus(302);

        $order = Order::first();

        $this->assertDatabaseHas('item_order', [
            'order_id' => $order->id,
            'item_id' => $item1->id,
            'quantity' => 2,
            'price' => 30.00,
        ]);
        $this->assertDatabaseHas('item_order', [
            'order_id' => $order->id,
            'item_id' => $item2->id,
            'quantity' => 1,
            'price' => 20.00,
        ]);
        $this->assertDatabaseHas('item_order', [
            'order_id' => $order->id,
            'item_id' => $item3->id,
            'quantity' => 1,
            'price' => 20.00,
        ]);
        $this->assertDatabaseHas('orders', [
            'user_id' => $user->id,
            'menu_id' => $menu->id,
            'total' => 117.60,
            'subtotal' => 100.00,
            'name' => 'test order',
            'address1' => 'some street st.',
            'address2' => 'unit 102',
            'postal_code' => 'v3c4h8',
            'city' => 'vancouver',
            'province' => 'bc',
            'country' => 'canada',
            'phone' => '6045001285',
            'email' => 'mhugocflores93@gmail.com',
        ]);
    }
}
