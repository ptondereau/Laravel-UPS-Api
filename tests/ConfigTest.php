<?php

namespace Ptondereau\Tests\LaravelUpsApi;

use Illuminate\Support\Facades\Config;

/**
 * This is the config test class.
 *
 * @author Pierre Tondereau <pierre.tondereau@gmail.com>
 */
class ConfigTest extends TestCase
{
    public function testAccessKeyConfig(): void
    {
        $this->assertEquals(Config::get('ups.access_key'), 'test');
    }

    public function testUserIdConfig(): void
    {
        $this->assertEquals(Config::get('ups.user_id'), 'test');
    }

    public function testPasswordConfig(): void
    {
        $this->assertEquals(Config::get('ups.password'), 'test');
    }

    public function testSandboxConfig(): void
    {
        $this->assertTrue(Config::get('ups.sandbox'));
    }
}
