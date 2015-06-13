<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;
use App\WorkOrder;

class PageRenderTest extends TestCase
{
    // create sqlite test database and drop tables afterward
    use DatabaseMigrations;
    use WithoutMiddleware;
    use DatabaseTransactions;

    // make sure client app is displaying OK
    public function testClientAppMainPage()
    {
        $this->visit('/')
             ->see('client area');
    }

    // make sure admin dashboard is rendering for logged in users
    public function testAdminAppMainPage()
    {
        $user = factory(User::class)->create();
        $this->actingAs($user)
            ->visit('/home')
            ->see('Dashboard Overview');
    }

    // make sure map generates when work order is queued
    public function testWorkOrderMapGeneration()
    {
        // generate fake work order
        $work_order = factory(WorkOrder::class)->create();
        // generate fake user
        $user = factory(User::class)->create();
        // check that fake user can see rendered fake work order map
        $this->actingAs($user)
             ->visit('/home')
             ->see($work_order->description);
    }

    // make sure 'Total' work orders list item is correct
    public function testWorkOrdersTotalListItem()
    {
        $work_orders = factory(WorkOrder::class, 5)->create();
        $user = factory(User::class)->create();
        $this->actingAs($user)
             ->visit('/home')
             ->see('Total <span class="badge">5</span>');
    }

    // make sure 'Todo' work orders list item is correct
    public function testWorkOrdersTodoListItem()
    {
        // these all default to complete=false
        $work_orders = factory(WorkOrder::class, 5)->create();
        $user = factory(User::class)->create();
        $this->actingAs($user)
             ->visit('/home')
             ->see('Todo <span class="badge">5</span>');
    }

    // make sure 'Complete' work orders list item is correct
    public function testWorkOrdersCompleteListItem()
    {
        $work_orders = factory(WorkOrder::class, 5)->create([
            'completed' => 1,
        ]);
        $user = factory(User::class)->create();
        $this->actingAs($user)
             ->visit('/home')
             ->see('Complete <span class="badge">5</span>');
    }
}
