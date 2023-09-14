<?php

declare(strict_types=1);

namespace Tests;

use Codeception\Util\HttpCode;
use Tests\Support\ApiTester;

class PostEmployeeCest
{
    public function createCorrectEmployee(ApiTester $apiTester): void
    {
        $requestBody = [
            "name" => "Vic",
            "email" => "vic@mail.ru",
            "position" => "QA",
            "age" => 31
        ];

        $apiTester->wantToTest('Post employee');
        $apiTester->sendPostAsJson('add', $requestBody);
        $apiTester->seeResponseCodeIs(HttpCode::CREATED);
        $apiTester->seeResponseIsJson();
        $apiTester->seeResponseMatchesJsonType(
            [
                "id" => "integer"
            ]
        );
    }
}