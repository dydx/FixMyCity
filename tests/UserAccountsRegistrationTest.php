<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserAcountsRegistrationTest extends TestCase
{
  use WithoutMiddleware;

  public function testLoginForm()
  {
    return true;
  }
}