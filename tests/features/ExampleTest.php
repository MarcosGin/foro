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
            'name' => 'Marcos Gin',
            'email' => 'marcosgin291@gmail.com'
        ]);

        $this->actingAs($user,'api')
             ->visit('api/user')
             ->see('Marcos Gin')
             ->see('marcosgin291@gmail.com');
    }
}
