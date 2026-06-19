<?php

namespace Tests\Feature;

use App\Models\Order;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class OrderManagementTest extends TestCase
{
    use RefreshDatabase;

    public function test_customer_can_place_an_order_with_server_calculated_total(): void
    {
        $response = $this->post(route('orders.store'), [
            'name' => 'Rahim Uddin',
            'phone' => '01712345678',
            'division' => 'Dhaka',
            'address' => 'Dhanmondi, Dhaka',
            'quantity' => 3,
            'unit_price' => 1,
            'total' => 1,
        ]);

        $order = Order::firstOrFail();

        $response
            ->assertRedirect(route('landing').'#order-form')
            ->assertSessionHas('order_success');

        $this->assertSame(1950, $order->unit_price);
        $this->assertSame(5850, $order->total);
        $this->assertSame('pending', $order->status);
        $this->assertStringStartsWith('NAK-', $order->order_number);
    }

    public function test_order_requires_a_valid_bangladeshi_phone_number(): void
    {
        $this->from(route('landing'))
            ->post(route('orders.store'), [
                'name' => 'Rahim Uddin',
                'phone' => '12345',
                'division' => 'Dhaka',
                'address' => 'Dhanmondi, Dhaka',
                'quantity' => 1,
            ])
            ->assertRedirect(route('landing'))
            ->assertSessionHasErrors('phone');

        $this->assertDatabaseCount('orders', 0);
    }

    public function test_admin_can_filter_view_update_and_delete_orders(): void
    {
        $admin = User::factory()->create(['is_admin' => true]);
        $order = Order::create([
            'order_number' => 'NAK-260619-ABC123',
            'customer_name' => 'Karim Ahmed',
            'phone' => '01812345678',
            'division' => 'Chattogram',
            'address' => 'Agrabad, Chattogram',
            'product_name' => 'Test Ring',
            'quantity' => 2,
            'unit_price' => 1950,
            'shipping_charge' => 0,
            'total' => 3900,
            'status' => 'pending',
        ]);

        $this->actingAs($admin)
            ->get(route('admin.orders.index', ['search' => 'Karim', 'status' => 'pending']))
            ->assertOk()
            ->assertSee($order->order_number)
            ->assertSee('Karim Ahmed');

        $this->actingAs($admin)
            ->get(route('admin.orders.show', $order))
            ->assertOk()
            ->assertSee('Agrabad, Chattogram');

        $this->actingAs($admin)
            ->put(route('admin.orders.update', $order), [
                'status' => 'confirmed',
                'admin_note' => 'Customer confirmed by phone.',
            ])
            ->assertRedirect();

        $this->assertDatabaseHas('orders', [
            'id' => $order->id,
            'status' => 'confirmed',
            'admin_note' => 'Customer confirmed by phone.',
        ]);

        $this->actingAs($admin)
            ->delete(route('admin.orders.destroy', $order))
            ->assertRedirect(route('admin.orders.index'));

        $this->assertDatabaseMissing('orders', ['id' => $order->id]);
    }
}
