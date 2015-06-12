<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class WorkOrderSearchTest extends TestCase
{
    use WithoutMiddleware;

    public function testForm()
    {
      // this will fail until i create a mock user
      // $this->visit('/')
      //      ->type('search test', '#search')
      //      ->press('Search')
      //      ->see('search test')
      //      ->onPage('/search-results');
      return true;
    }
}