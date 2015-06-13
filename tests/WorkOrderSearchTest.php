<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class WorkOrderSearchTest extends TestCase
{
    use WithoutMiddleware;
    use DatabaseTransactions;

    public function testForm()
    {
      $user = factory(App\User::class)->create();
      $this->actingAs($user)
           ->visit('/')
           ->type('search test', '#search')
           ->press('Search')
           ->see('search test')
           ->onPage('/search-results');
    }
}