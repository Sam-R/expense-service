<?php

namespace App\Tests;

use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\ApiTestCase;
use Hautelook\AliceBundle\PhpUnit\RefreshDatabaseTrait;
use App\Entity\Expense;

class ExpenseTest extends ApiTestCase
{
    // This trait provided by AliceBundle will take care of refreshing the database content to a known state before each test
    use RefreshDatabaseTrait;

    public function testGetAllExpenses(): void
    {
        $response = static::createClient()->request('GET', '/api/expenses');

        self::assertResponseIsSuccessful();

        // Asserts that the returned content type is JSON-LD (the default)
        self::assertResponseHeaderSame('content-type', 'application/ld+json; charset=utf-8');

//        $this->assertJsonContains(['@id' => '/']);
    }

    public function testGetAnExpenses(): void
    {
//        $this->databaseTool->loadFixtures([Expense::class]);

        $response = static::createClient()->request('GET', '/api/expenses/1');

        self::assertResponseIsSuccessful();

        // Asserts that the returned content type is JSON-LD (the default)
        self::assertResponseHeaderSame('content-type', 'application/ld+json; charset=utf-8');

//        self::assertJsonContains(['@id' => '/']);
    }
}
