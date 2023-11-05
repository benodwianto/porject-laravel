<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutingTest extends TestCase
{
    public function testGet()
    {
        $this->get('/ben')
            ->assertStatus(200)
            ->assertSeeText('Hello Beno Dwianto');
    }

    public function Redirect()
    {
        $this->get('yow')
            ->assertRedirect('/ben');
    }

    // public function RouteParameter()
    // {
    //     $this->get('/products/1')
    //         ->assertSeeText('Product 1');

    //     $this->get('/products/3')
    //         ->assertSeeText('Product 3');

    //     $this->get('/products/4/items/we')
    //         ->assertSeeText('Product 4, Item we');
    // }
}
