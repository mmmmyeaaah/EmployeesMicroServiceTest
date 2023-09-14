<?php

declare(strict_types=1);

namespace Tests;

use Codeception\Example;
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


    /** @dataProvider incorrectDataProvider */
    public function createEmployeeWithIncorrectData(ApiTester $apiTester, Example $provider): void
    {
        $apiTester->wantToTest('Create employee with incorrect data');
        $apiTester->sendPostAsJson('add', $provider["requestBody"]);
        $apiTester->seeResponseCodeIs(HttpCode::BAD_REQUEST);

    }

    private function incorrectDataProvider(): iterable
    {
        //пустой ввод
        yield [
            "requestBody" => []
        ];


        //age type string
//        yield [
//            "requestBody" => [
//                "name" => "Vic",
//                "email" => "vic@mail.ru",
//                "position" => "QA",
//                "age" => "31"
//            ]
//        ];

        //without age
//        yield [
//            "requestBody" => [
//                "name" => "Vic",
//                "email" => "vic@mail.ru",
//                "position" => "QA",
//            ]
//        ];

        //without position
//        yield [
//            "requestBody" => [
//                "name" => "Vic",
//                "email" => "vic@mail.ru",
//                "age" => 31
//            ]
//        ];

        // without email
        yield [
            "requestBody" => [
                "name" => "Vic",
                "position" => "QA",
                "age" => 31
            ]
        ];
        //without name
//        yield [
//            "requestBody" => [
//                "email" => "vic@mail.ru",
//                "position" => "QA",
//                "age" => "31"
//            ]
//        ];

        //post с любым количеством данных -> 201! Bug!?
//        yield [
//            "requestBody" => [
//                "name" => "Vic",
//                "email" => "vic@mail.ru",
//                "position" => "QA",
//                "age" => 31,
//                "aaa" => "aa",
//                "aa" => "a"
//            ]
//        ];

        //name int
        yield [
            "requestBody" => [
                "name" => 666,
                "email" => "vic@mail.ru",
                "position" => "QA",
                "age" => 31
            ]
        ];

        //email int
        yield [
            "requestBody" => [
                "name" => "Vic",
                "email" => 666,
                "position" => "QA",
                "age" => 31
            ]
        ];

        //position int
        yield [
            "requestBody" => [
                "name" => "Vic",
                "email" => "vic@mail.ru",
                "position" => 666,
                "age" => 31
            ]
        ];

        //email without @
        yield [
            "requestBody" => [
                "name" => "Vic",
                "email" => "vicmail.ru",
                "position" => "QA",
                "age" => 31
            ]
        ];

        //email without .
        yield [
            "requestBody" => [
                "name" => "Vic",
                "email" => "vic@mailru",
                "position" => "QA",
                "age" => 31
            ]
        ];

        //with id
//        yield [
//            "requestBody" => [
//                "name" => "Vic",
//                "email" => "vic@mail.ru",
//                "position" => "QA",
//                "age" => 31,
//                "id" => 1
//            ]
//        ];

        //name => []
        yield [
            "requestBody" => [
                "name" => [],
                "email" => "vic@mail.ru",
                "position" => "QA",
                "age" => 31
            ]
        ];

        //email => []
        yield [
            "requestBody" => [
                "name" => "Vic",
                "email" => [],
                "position" => "QA",
                "age" => 31
            ]
        ];

        //position => []
        yield [
            "requestBody" => [
                "name" => "Vic",
                "email" => "vic@mail.ru",
                "position" => [],
                "age" => 31
            ]
        ];

        //age => []
//        yield [
//            "requestBody" => [
//                "name" => "Vic",
//                "email" => "vic@mail.ru",
//                "position" => "QA",
//                "age" => []
//            ]
//        ];

        //name bool
        yield [
            "requestBody" => [
                "name" => False,
                "email" => "vic@mail.ru",
                "position" => "QA",
                "age" => 31
            ]
        ];

        //email bool
        yield [
            "requestBody" => [
                "name" => "Vic",
                "email" => False,
                "position" => "QA",
                "age" => 31
            ]
        ];

        //position bool
        yield [
            "requestBody" => [
                "name" => "Vic",
                "email" => "vic@mail.ru",
                "position" => False,
                "age" => 31
            ]
        ];

        //age bool
//        yield [
//            "requestBody" => [
//                "name" => "Vic",
//                "email" => "vic@mail.ru",
//                "position" => "QA",
//                "age" => False
//            ]
//        ];
    }
}