<?php

namespace App\Tests;

use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\ApiTestCase;
use Hautelook\AliceBundle\PhpUnit\RefreshDatabaseTrait;

class ExpenseTest extends ApiTestCase
{
    // This trait provided by AliceBundle will take care of refreshing the database content to a known state before each test
    use RefreshDatabaseTrait;

    public function testSomething(): void
    {
        $response = static::createClient()->request('GET', '/api/expenses');

        $this->assertResponseIsSuccessful();

        // Asserts that the returned content type is JSON-LD (the default)
        $this->assertResponseHeaderSame('content-type', 'application/ld+json; charset=utf-8');

        // $this->assertJsonContains(['@id' => '/']);
    }
}
