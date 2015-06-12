<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    use WithoutMiddleware;
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testClientAppMainPage()
    {
        $this->visit('/')
             ->see('client area');
    }

    public function testAdminAppMainPage()
    {
        $this->visit('/home')
             ->see('admin area');
    }
}
