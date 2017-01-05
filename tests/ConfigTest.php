<?php

namespace Ptondereau\Tests\LaravelUpsApi;

use Illuminate\Support\Facades\Config;

/**
 * This is the config test class.
 *
 * @author Pierre Tondereau <pierre@doers.fr>
 */
class ConfigTest extends TestCase
{
    public function testAccessKeyConfig()
    {
        $this->assertEquals(Config::get('ups.access_key'), 'test');
    }

    public function testUserIdConfig()
    {
        $this->assertEquals(Config::get('ups.user_id'), 'test');
    }

    public function testPasswordConfig()
    {
        $this->assertEquals(Config::get('ups.password'), 'test');
    }

    public function testSandboxConfig()
    {
        $this->assertTrue(Config::get('ups.sandbox'));
    }
}
