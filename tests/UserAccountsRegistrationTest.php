<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserAcountsRegistrationTest extends TestCase
{

  use DatabaseTransactions;

  public function testLoginForm()
  {
    // this is oddly difficult as a functional test
    // by way of how the model factory works, i think.
    // you can create a new user with a password, but
    // you can't easily store the bcrypt'd password
    // as well as keep the plaintext.

    // might need to have a temp var or something in there
    return true;
  }
}