<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;

class PageRenderTest extends TestCase
{
    use WithoutMiddleware;
    // I think I need this for CI?
    use DatabaseTransactions;

    public function testClientAppMainPage()
    {
        $this->visit('/')
             ->see('client area');
    }

    public function testAdminAppMainPage()
    {

        $user = factory(User::class)->create();
        $this->actingAs($user)
            ->visit('/home')
            ->see('Dashboard Overview');
    }
}
