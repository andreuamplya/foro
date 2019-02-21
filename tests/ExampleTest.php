<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $user = factory(\App\User::class)->create([
           'name' => 'Andreu Amplya',
           'email' => 'andreu@amplya.es',
        ]);

        $this->actingAs($user,'api')
             ->visit('api/user')
             ->see('Andreu Amplya')
             ->see('andreu@amplya.es');
    }
}
