<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PageRenderTest extends TestCase
{
    use WithoutMiddleware;

    public function testClientAppMainPage()
    {
        $this->visit('/')
             ->see('client area');
    }

    public function testAdminAppMainPage()
    {
        $this->visit('/home')
             ->see('Dashboard Overview');
    }
}
