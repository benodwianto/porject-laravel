<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use function PHPUnit\Framework\assertEquals;

class EnvirontmentTest extends TestCase
{
    public function TestGetEnv()
    {
        $project = env('project-laravel');

        self::assertEquals('BenoDwianto', $project);
    }
}
