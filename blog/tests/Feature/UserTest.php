<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testRespose()
    {
        $response = $this->get('/user');

        $response->assertStatus(200);
    }

    public function testText()
    {
        $text = $this->get('/user');

        $text->assertSeeText("Hello World");
    }
}
