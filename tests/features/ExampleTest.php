<?php



class ExampleTest extends FeatureTestCase
{

    /**
     * A basic functional test example.
     *
     * @return void
     */
    function test_basic_example()
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
