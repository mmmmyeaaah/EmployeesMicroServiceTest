<?php

declare(strict_types=1);

namespace Tests;

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
}