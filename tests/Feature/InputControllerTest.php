<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InputControllerTest extends TestCase
{
    public function testInput()
    {
        $this->get('/input/hello?name=Beno')
            ->assertSeeText('Hello Beno');

        $this->get('/input/hello', ['name' => 'Beno'])
            ->assertSeeText('Hello Beno');
    }

    public function testInputNested()
    {
        $this->post('/input/hello/first', [
            "name" => [
                "first" => "Beno",
                "last" => "Dwianto"
            ]
        ])->assertSeeText('Hello Beno');
    }
}
