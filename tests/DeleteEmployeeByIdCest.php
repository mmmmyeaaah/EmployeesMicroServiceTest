<?php

declare(strict_types=1);

use Codeception\Util\HttpCode;
use Codeception\Example;
use PHPUnit\Framework\Attributes\Before;
use Tests\Support\ApiTester;

class DeleteEmployeeByIdCest
{
    private $employeeId;

    #[Before("deleteEmployeeById")]
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

    public function deleteEmployeeById(ApiTester $apiTester): void
    {
        $apiTester->wantToTest("Delete employee by id");
        $response = $apiTester->sendDelete("remove/" . (string)$this->employeeId);
        $apiTester->seeResponseCodeIs(HttpCode::NO_CONTENT);
        $apiTester->sendGet((string)$this->employeeId);
        $apiTester->seeResponseCodeIs(HttpCode::NOT_FOUND);
        $apiTester->seeResponseIsJson();
        $apiTester->seeResponseMatchesJsonType(
            [
                "message" => "string"
            ]
        );
    }

    /** @dataProvider nonExistIdProvider */
    public function deleteEmployeeWithNonExistId(ApiTester $apiTester, Example $provider): void
    {
        $apiTester->wantToTest("Delete employee by non exist id");
        $apiTester->sendDelete("remove/" . $provider["incorrectId"]);
        $apiTester->seeResponseCodeIs(HttpCode::NO_CONTENT);
    }

    private function nonExistIdProvider(): iterable
    {
        yield [
            "incorrectId" => "9999999999"
        ];

        yield [
            "incorrectId" => "-1"
        ];

        yield [
            "incorrectId" => "0"
        ];

        yield [
            "incorrectId" => "66.6"
        ];
    }

    /** @dataProvider incorrectIdProvider */
    public function deleteEmployeeWithIncorrectId(ApiTester $apiTester, Example $provider): void
    {
        $apiTester->wantToTest("Delete employee by non exist id");
        $apiTester->sendDelete("remove/" . $provider["incorrectId"]);
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
            "incorrectId" => "aaaa"
        ];

        yield [
            "incorrectId" => ""
        ];

        yield [
            "incorrectId" => False
        ];

        yield [
            "incorrectId" => "@#$%"
        ];
    }
}
