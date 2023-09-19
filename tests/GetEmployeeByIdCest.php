<?php

declare(strict_types=1);

namespace Tests;

use Codeception\Example;
use Codeception\Util\HttpCode;
use PHPUnit\Framework\Attributes\Before;
use Tests\Support\ApiTester;

class GetEmployeeByIdCest
{
    private $employeeId;

    #[Before("getEmployeeById")]
    public function precondition(ApiTester $apiTester): void
    {
        $requestData = [
            "name" => "Vic",
            "email" => "vic@mail.ru",
            "position" => "QA",
            "age" => 31
        ];

        $response = $apiTester->sendPostAsJson("add", $requestData);
        $apiTester->seeResponseCodeIs(HttpCode::CREATED);
        $apiTester->seeResponseIsJson();
        $apiTester->seeResponseMatchesJsonType(
        [
            "id" => "integer"
        ]
    );
        $this->employeeId = $response["id"];
    }

    public function getEmployeeById(ApiTester $apiTester): void
    {
        $apiTester->wantToTest("Get employee by id");
        $apiTester->sendGet((string)$this->employeeId);
        $apiTester->seeResponseCodeIs(HttpCode::OK);
        $apiTester->seeResponseIsJson();
        $apiTester->seeResponseMatchesJsonType(
            [
                "id" => "integer",
                "name" => "string",
                "email" => "string:email",
                "position" => "string",
                "age" => "string"
            ]
        );
        $apiTester->seeResponseContainsJson(
            [
                "id" => $this->employeeId,
                "name" => "Vic",
                "email" => "vic@mail.ru",
                "position" => "QA",
                "age" => 31
            ]
        );
    }

    /** @dataProvider incorrectIdProvider */
    public function getEmployeeWithIncorrectId(ApiTester $apiTester, Example $provider): void
    {
        $apiTester->wantToTest("Get Employee With Non-Existent Id");
        $apiTester->sendGet($provider["incorrectId"]);
        $apiTester->seeResponseCodeIs(HttpCode::NOT_FOUND);
        $apiTester->seeResponseIsJson();
        $apiTester->seeResponseMatchesJsonType(
            [
                "message" => "string"
            ]
        );
    }


    private function incorrectIdProvider(): iterable
    {
        yield [
            "incorrectId" => "999999"
        ];

        yield [
            "incorrectId" => ""
        ];

        yield [
            "incorrectId" => "getemployee"
        ];

        yield [
            "incorrectId" => "-666"
        ];
    }
}