<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;
use App\WorkOrder;

class PageRenderTest extends TestCase
{
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
}
