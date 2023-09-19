- **ID:** emp001
- **Priority:** A
- **Requirement:** 4
- **TITLE:** Добавление сотрудника с корректными данными
- **ADDITIONAL INFO:** Параметры POST запроса передаются в теле запроса в JSON объекте  
  {"name": "Vic",  
  "email": "vic@mail.ru",  
  "position": "QA",  
  "age": 31}
- **STEPS:**  
  1.Отправить POST запрос с валидными данными на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  2.Проверить код ответа  
  3.Проверить тело ответа
- **EXPECTED RESULTS:**  
  1  
  2.Код ответа 201  
  3.1 Тело ответа в формате JSON  
  3.2 Тело ответа имеет следующий вид: {"id": 0} 
- **STATUS:** passed  


---


- **ID:** emp002
- **Priority:** A
- **Requirement:** 4
- **TITLE:** Добавление сотрудника с пустыми данными
- **ADDITIONAL INFO:** Параметры POST запроса передаются в теле запроса в JSON объекте  
 
- **STEPS:**  
  1.Отправить пустой POST запрос на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  2.Проверить код ответа  
  3.Проверить тело ответа
- **EXPECTED RESULTS:**  
  1  
  2.Код ответа 400  
  3.1 Тело ответа в формате JSON  
  3.2 Тело ответа имеет следующий вид: {"message": "string"}
- **STATUS:** passed


---


- **ID:** emp003
- **Priority:** A
- **Requirement:** 4.4
- **TITLE:** Добавление сотрудника, возраст тип "string"
- **ADDITIONAL INFO:** Параметры POST запроса передаются в теле запроса в JSON объекте  
  {"name" => "Vic",  
  "email" => "vic@mail.ru",  
  "position" => "QA",  
  "age" => "31"}

- **STEPS:**  
  1.Отправить POST запрос на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  2.Проверить код ответа  
  3.Проверить тело ответа
- **EXPECTED RESULTS:**  
  1  
  2.Код ответа 400  
  3.1 Тело ответа в формате JSON  
  3.2 Тело ответа имеет следующий вид: {"message": "string"}
- **STATUS:** failed


---


- **ID:** emp004
- **Priority:** A
- **Requirement:** 4.4
- **TITLE:** Добавление сотрудника, возраст отрицательное число
- **ADDITIONAL INFO:** Параметры POST запроса передаются в теле запроса в JSON объекте  
  {"name" => "Vic",  
  "email" => "vic@mail.ru",  
  "position" => "QA",  
  "age" => -31}

- **STEPS:**  
  1.Отправить POST запрос на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  2.Проверить код ответа  
  3.Проверить тело ответа
- **EXPECTED RESULTS:**  
  1  
  2.Код ответа 400  
  3.1 Тело ответа в формате JSON  
  3.2 Тело ответа имеет следующий вид: {"message": "string"}
- **STATUS:** failed


---


- **ID:** emp005
- **Priority:** A
- **Requirement:** 4.4
- **TITLE:** Добавление сотрудника, возраст тип "float"
- **ADDITIONAL INFO:** Параметры POST запроса передаются в теле запроса в JSON объекте  
  {"name" => "Vic",  
  "email" => "vic@mail.ru",  
  "position" => "QA",  
  "age" => 31.5}

- **STEPS:**  
  1.Отправить POST запрос на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  2.Проверить код ответа  
  3.Проверить тело ответа
- **EXPECTED RESULTS:**  
  1  
  2.Код ответа 400  
  3.1 Тело ответа в формате JSON  
  3.2 Тело ответа имеет следующий вид: {"message": "string"}
- **STATUS:** failed


---


- **ID:** emp006
- **Priority:** A
- **Requirement:** 4.4
- **TITLE:** Добавление сотрудника, без поля "возраст"
- **ADDITIONAL INFO:** Параметры POST запроса передаются в теле запроса в JSON объекте  
  {"name" => "Vic",  
  "email" => "vic@mail.ru",  
  "position" => "QA"}

- **STEPS:**  
  1.Отправить POST запрос на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  2.Проверить код ответа  
  3.Проверить тело ответа
- **EXPECTED RESULTS:**  
  1  
  2.Код ответа 400  
  3.1 Тело ответа в формате JSON  
  3.2 Тело ответа имеет следующий вид: {"message": "string"}
- **STATUS:** failed


---


- **ID:** emp007
- **Priority:** A
- **Requirement:** 4.4
- **TITLE:** Добавление сотрудника, возраст тип "bool"
- **ADDITIONAL INFO:** Параметры POST запроса передаются в теле запроса в JSON объекте  
  {"name" => "Vic",  
  "email" => "vic@mail.ru",  
  "position" => "QA",  
  "age" => False}

- **STEPS:**  
  1.Отправить POST запрос на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  2.Проверить код ответа  
  3.Проверить тело ответа
- **EXPECTED RESULTS:**  
  1  
  2.Код ответа 400  
  3.1 Тело ответа в формате JSON  
  3.2 Тело ответа имеет следующий вид: {"message": "string"}
- **STATUS:** failed


---


- **ID:** emp008
- **Priority:** A
- **Requirement:** 4.4
- **TITLE:** Добавление сотрудника, возраст пустая строка
- **ADDITIONAL INFO:** Параметры POST запроса передаются в теле запроса в JSON объекте  
  {"name" => "Vic",  
  "email" => "vic@mail.ru",  
  "position" => "QA",  
  "age" => ""}

- **STEPS:**  
  1.Отправить POST запрос на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  2.Проверить код ответа  
  3.Проверить тело ответа
- **EXPECTED RESULTS:**  
  1  
  2.Код ответа 400  
  3.1 Тело ответа в формате JSON  
  3.2 Тело ответа имеет следующий вид: {"message": "string"}
- **STATUS:** failed


---


- **ID:** emp009
- **Priority:** A
- **Requirement:** 4.4
- **TITLE:** Добавление сотрудника, возраст тип array
- **ADDITIONAL INFO:** Параметры POST запроса передаются в теле запроса в JSON объекте  
  {"name" => "Vic",  
  "email" => "vic@mail.ru",  
  "position" => "QA",  
  "age" => []}

- **STEPS:**  
  1.Отправить POST запрос на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  2.Проверить код ответа  
  3.Проверить тело ответа
- **EXPECTED RESULTS:**  
  1  
  2.Код ответа 400  
  3.1 Тело ответа в формате JSON  
  3.2 Тело ответа имеет следующий вид: {"message": "string"}
- **STATUS:** failed


---


- **ID:** emp010
- **Priority:** A
- **Requirement:** 4.4
- **TITLE:** Добавление сотрудника, возраст null
- **ADDITIONAL INFO:** Параметры POST запроса передаются в теле запроса в JSON объекте  
  {"name" => "Vic",  
  "email" => "vic@mail.ru",  
  "position" => "QA",  
  "age" => null}

- **STEPS:**  
  1.Отправить POST запрос на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  2.Проверить код ответа  
  3.Проверить тело ответа
- **EXPECTED RESULTS:**  
  1  
  2.Код ответа 400  
  3.1 Тело ответа в формате JSON  
  3.2 Тело ответа имеет следующий вид: {"message": "string"}
- **STATUS:** failed


---


- **ID:** emp011
- **Priority:** A
- **Requirement:** 4.4
- **TITLE:** Добавление сотрудника, возраст строка с пробелами
- **ADDITIONAL INFO:** Параметры POST запроса передаются в теле запроса в JSON объекте  
  {"name" => "Vic",  
  "email" => "vic@mail.ru",  
  "position" => "QA",  
  "age" => "   "}

- **STEPS:**  
  1.Отправить POST запрос на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  2.Проверить код ответа  
  3.Проверить тело ответа
- **EXPECTED RESULTS:**  
  1  
  2.Код ответа 400  
  3.1 Тело ответа в формате JSON  
  3.2 Тело ответа имеет следующий вид: {"message": "string"}
- **STATUS:** failed


---


- **ID:** emp012
- **Priority:** A
- **Requirement:** 4.2
- **TITLE:** Добавление сотрудника, без поля "email"
- **ADDITIONAL INFO:** Параметры POST запроса передаются в теле запроса в JSON объекте  
  {"name" => "Vic",   
  "position" => "QA",  
  "age" => 31}

- **STEPS:**  
  1.Отправить POST запрос на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  2.Проверить код ответа  
  3.Проверить тело ответа
- **EXPECTED RESULTS:**  
  1  
  2.Код ответа 400  
  3.1 Тело ответа в формате JSON  
  3.2 Тело ответа имеет следующий вид: {"message": "string"}
- **STATUS:** passed


---


- **ID:** emp013
- **Priority:** A
- **Requirement:** 4.2
- **TITLE:** Добавление сотрудника, "email" неуникальный
- **ADDITIONAL INFO:** Параметры POST запроса передаются в теле запроса в JSON объекте  
  {"name" => "Vic",   
  "position" => "QA",  
  email" => "vic@mail.ru",  
  "age" => 31}

- **STEPS:**  
  1.Отправить POST запрос на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  2.Проверить код ответа  
  3.Повторить шаг 1  
  4.Проверить код ответа  
  5.Проверить тело ответа
- **EXPECTED RESULTS:**  
  1   
  2.Код ответа 201  
  3  
  4.Код ответа 400  
  4.1 Тело ответа в формате JSON  
  4.2 Тело ответа имеет следующий вид: {"message": "string"}
- **STATUS:** failed


---


- **ID:** emp014
- **Priority:** A
- **Requirement:** 4.2
- **TITLE:** Добавление сотрудника, "email" integer
- **ADDITIONAL INFO:** Параметры POST запроса передаются в теле запроса в JSON объекте  
  {"name" => "Vic",   
  "position" => "QA",  
  email" => 666,  
  "age" => 31}

- **STEPS:**  
  1.Отправить POST запрос на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  2.Проверить код ответа  
  3.Проверить тело ответа
- **EXPECTED RESULTS:**  
  1   
  2.Код ответа 400  
  3.Тело ответа имеет следующий вид: {"message": "string"}
- **STATUS:** passed


---


- **ID:** emp015
- **Priority:** A
- **Requirement:** 4.2
- **TITLE:** Добавление сотрудника, "email" float
- **ADDITIONAL INFO:** Параметры POST запроса передаются в теле запроса в JSON объекте  
  {"name" => "Vic",   
  "position" => "QA",  
  email" => 66.6,  
  "age" => 31}

- **STEPS:**  
  1.Отправить POST запрос на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  2.Проверить код ответа  
  3.Проверить тело ответа
- **EXPECTED RESULTS:**  
  1   
  2.Код ответа 400  
  3.Тело ответа имеет следующий вид: {"message": "string"}
- **STATUS:** passed


---


- **ID:** emp016
- **Priority:** A
- **Requirement:** 4.2
- **TITLE:** Добавление сотрудника, "email" тип array
- **ADDITIONAL INFO:** Параметры POST запроса передаются в теле запроса в JSON объекте  
  {"name" => "Vic",   
  "position" => "QA",  
  email" => [],  
  "age" => 31}

- **STEPS:**  
  1.Отправить POST запрос на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  2.Проверить код ответа  
  3.Проверить тело ответа
- **EXPECTED RESULTS:**  
  1   
  2.Код ответа 400  
  3.Тело ответа имеет следующий вид: {"message": "string"}
- **STATUS:** passed


---


- **ID:** emp017
- **Priority:** A
- **Requirement:** 4.2
- **TITLE:** Добавление сотрудника, "email" тип bool
- **ADDITIONAL INFO:** Параметры POST запроса передаются в теле запроса в JSON объекте  
  {"name" => "Vic",   
  "position" => "QA",  
  email" => False,  
  "age" => 31}

- **STEPS:**  
  1.Отправить POST запрос на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  2.Проверить код ответа  
  3.Проверить тело ответа
- **EXPECTED RESULTS:**  
  1   
  2.Код ответа 400  
  3.Тело ответа имеет следующий вид: {"message": "string"}
- **STATUS:** passed


---


- **ID:** emp018
- **Priority:** A
- **Requirement:** 4.2
- **TITLE:** Добавление сотрудника, "email" без "@"
- **ADDITIONAL INFO:** Параметры POST запроса передаются в теле запроса в JSON объекте  
  {"name" => "Vic",   
  "position" => "QA",  
  email" => "vicmail.ru",  
  "age" => 31}

- **STEPS:**  
  1.Отправить POST запрос на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  2.Проверить код ответа  
  3.Проверить тело ответа
- **EXPECTED RESULTS:**  
  1   
  2.Код ответа 400  
  3.Тело ответа имеет следующий вид: {"message": "string"}
- **STATUS:** passed


---


- **ID:** emp019
- **Priority:** A
- **Requirement:** 4.2
- **TITLE:** Добавление сотрудника, "email" без "."
- **ADDITIONAL INFO:** Параметры POST запроса передаются в теле запроса в JSON объекте  
  {"name" => "Vic",   
  "position" => "QA",  
  email" => "vic@mailru",  
  "age" => 31}

- **STEPS:**  
  1.Отправить POST запрос на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  2.Проверить код ответа  
  3.Проверить тело ответа
- **EXPECTED RESULTS:**  
  1   
  2.Код ответа 400  
  3.Тело ответа имеет следующий вид: {"message": "string"}
- **STATUS:** passed


---


- **ID:** emp020
- **Priority:** A
- **Requirement:** 4.2
- **TITLE:** Добавление сотрудника, "email" без "." и "@"
- **ADDITIONAL INFO:** Параметры POST запроса передаются в теле запроса в JSON объекте  
  {"name" => "Vic",   
  "position" => "QA",  
  email" => "vicmailru",  
  "age" => 31}

- **STEPS:**  
  1.Отправить POST запрос на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  2.Проверить код ответа  
  3.Проверить тело ответа
- **EXPECTED RESULTS:**  
  1   
  2.Код ответа 400  
  3.Тело ответа имеет следующий вид: {"message": "string"}
- **STATUS:** passed


---


- **ID:** emp021
- **Priority:** A
- **Requirement:** 4.2
- **TITLE:** Добавление сотрудника, "email" пустая строка
- **ADDITIONAL INFO:** Параметры POST запроса передаются в теле запроса в JSON объекте  
  {"name" => "Vic",   
  "position" => "QA",  
  email" => "",  
  "age" => 31}

- **STEPS:**  
  1.Отправить POST запрос на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  2.Проверить код ответа  
  3.Проверить тело ответа
- **EXPECTED RESULTS:**  
  1   
  2.Код ответа 400  
  3.Тело ответа имеет следующий вид: {"message": "string"}
- **STATUS:** passed


---


- **ID:** emp022
- **Priority:** A
- **Requirement:** 4.2
- **TITLE:** Добавление сотрудника, "email" null
- **ADDITIONAL INFO:** Параметры POST запроса передаются в теле запроса в JSON объекте  
  {"name" => "Vic",   
  "position" => "QA",  
  email" => null,  
  "age" => 31}

- **STEPS:**  
  1.Отправить POST запрос на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  2.Проверить код ответа  
  3.Проверить тело ответа
- **EXPECTED RESULTS:**  
  1   
  2.Код ответа 400  
  3.Тело ответа имеет следующий вид: {"message": "string"}
- **STATUS:** passed


---


- **ID:** emp023
- **Priority:** A
- **Requirement:** 4.2
- **TITLE:** Добавление сотрудника, "email" пустая строка с пробелами
- **ADDITIONAL INFO:** Параметры POST запроса передаются в теле запроса в JSON объекте  
  {"name" => "Vic",   
  "position" => "QA",  
  email" => "   ",  
  "age" => 31}

- **STEPS:**  
  1.Отправить POST запрос на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  2.Проверить код ответа  
  3.Проверить тело ответа
- **EXPECTED RESULTS:**  
  1   
  2.Код ответа 400  
  3.Тело ответа имеет следующий вид: {"message": "string"}
- **STATUS:** passed



---


- **ID:** emp024
- **Priority:** A
- **Requirement:** 4.3
- **TITLE:** Добавление сотрудника без "position"
- **ADDITIONAL INFO:** Параметры POST запроса передаются в теле запроса в JSON объекте  
  {"name" => "Vic",    
  email" => "vic@mail.ru",  
  "age" => 31}

- **STEPS:**  
  1.Отправить POST запрос на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  2.Проверить код ответа  
  3.Проверить тело ответа
- **EXPECTED RESULTS:**  
  1   
  2.Код ответа 400  
  3.Тело ответа имеет следующий вид: {"message": "string"}
- **STATUS:** failed


---


- **ID:** emp025
- **Priority:** A
- **Requirement:** 4.3
- **TITLE:** Добавление сотрудника, "position" тип integer
- **ADDITIONAL INFO:** Параметры POST запроса передаются в теле запроса в JSON объекте  
  {"name" => "Vic",   
  "position" => 666,  
  email" => "vic@mail.ru",  
  "age" => 31}

- **STEPS:**  
  1.Отправить POST запрос на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  2.Проверить код ответа  
  3.Проверить тело ответа
- **EXPECTED RESULTS:**  
  1   
  2.Код ответа 400  
  3.Тело ответа имеет следующий вид: {"message": "string"}
- **STATUS:** passed


---


- **ID:** emp026
- **Priority:** A
- **Requirement:** 4.3
- **TITLE:** Добавление сотрудника, "position" тип float
- **ADDITIONAL INFO:** Параметры POST запроса передаются в теле запроса в JSON объекте  
  {"name" => "Vic",   
  "position" => 66.6,  
  email" => "vic@mail.ru",  
  "age" => 31}

- **STEPS:**  
  1.Отправить POST запрос на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  2.Проверить код ответа  
  3.Проверить тело ответа
- **EXPECTED RESULTS:**  
  1   
  2.Код ответа 400  
  3.Тело ответа имеет следующий вид: {"message": "string"}
- **STATUS:** passed


---


- **ID:** emp027
- **Priority:** A
- **Requirement:** 4.3
- **TITLE:** Добавление сотрудника, "position" тип array
- **ADDITIONAL INFO:** Параметры POST запроса передаются в теле запроса в JSON объекте  
  {"name" => "Vic",   
  "position" => [],  
  email" => "vic@mail.ru",  
  "age" => 31}

- **STEPS:**  
  1.Отправить POST запрос на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  2.Проверить код ответа  
  3.Проверить тело ответа
- **EXPECTED RESULTS:**  
  1   
  2.Код ответа 400  
  3.Тело ответа имеет следующий вид: {"message": "string"}
- **STATUS:** passed


---


- **ID:** emp028
- **Priority:** A
- **Requirement:** 4.3
- **TITLE:** Добавление сотрудника, "position" тип bool
- **ADDITIONAL INFO:** Параметры POST запроса передаются в теле запроса в JSON объекте  
  {"name" => "Vic",   
  "position" => False,  
  email" => "vic@mail.ru",  
  "age" => 31}

- **STEPS:**  
  1.Отправить POST запрос на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  2.Проверить код ответа  
  3.Проверить тело ответа
- **EXPECTED RESULTS:**  
  1   
  2.Код ответа 400  
  3.Тело ответа имеет следующий вид: {"message": "string"}
- **STATUS:** passed


---


- **ID:** emp029
- **Priority:** A
- **Requirement:** 4.3
- **TITLE:** Добавление сотрудника, "position" null
- **ADDITIONAL INFO:** Параметры POST запроса передаются в теле запроса в JSON объекте  
  {"name" => "Vic",   
  "position" => null,  
  email" => "vic@mail.ru",  
  "age" => 31}

- **STEPS:**  
  1.Отправить POST запрос на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  2.Проверить код ответа  
  3.Проверить тело ответа
- **EXPECTED RESULTS:**  
  1   
  2.Код ответа 400  
  3.Тело ответа имеет следующий вид: {"message": "string"}
- **STATUS:** failed


---


- **ID:** emp030
- **Priority:** A
- **Requirement:** 4.3
- **TITLE:** Добавление сотрудника, "position" пустая строка
- **ADDITIONAL INFO:** Параметры POST запроса передаются в теле запроса в JSON объекте  
  {"name" => "Vic",   
  "position" => "",  
  email" => "vic@mail.ru",  
  "age" => 31}

- **STEPS:**  
  1.Отправить POST запрос на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  2.Проверить код ответа  
  3.Проверить тело ответа
- **EXPECTED RESULTS:**  
  1   
  2.Код ответа 400  
  3.Тело ответа имеет следующий вид: {"message": "string"}
- **STATUS:** failed


---


- **ID:** emp031
- **Priority:** A
- **Requirement:** 4.3
- **TITLE:** Добавление сотрудника, "position" пустая строка с пробелами
- **ADDITIONAL INFO:** Параметры POST запроса передаются в теле запроса в JSON объекте  
  {"name" => "Vic",   
  "position" => "   ",  
  email" => "vic@mail.ru",  
  "age" => 31}

- **STEPS:**  
  1.Отправить POST запрос на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  2.Проверить код ответа  
  3.Проверить тело ответа
- **EXPECTED RESULTS:**  
  1   
  2.Код ответа 400  
  3.Тело ответа имеет следующий вид: {"message": "string"}
- **STATUS:** failed


---


- **ID:** emp032
- **Priority:** A
- **Requirement:** 4.1
- **TITLE:** Добавление сотрудника без "name"
- **ADDITIONAL INFO:** Параметры POST запроса передаются в теле запроса в JSON объекте  
  {"position" => "QA",  
  email" => "vic@mail.ru",  
  "age" => 31}

- **STEPS:**  
  1.Отправить POST запрос на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  2.Проверить код ответа  
  3.Проверить тело ответа
- **EXPECTED RESULTS:**  
  1   
  2.Код ответа 400  
  3.Тело ответа имеет следующий вид: {"message": "string"}
- **STATUS:** failed


---


- **ID:** emp033
- **Priority:** A
- **Requirement:** 4.1
- **TITLE:** Добавление сотрудника, "name" integer
- **ADDITIONAL INFO:** Параметры POST запроса передаются в теле запроса в JSON объекте  
  {"name" => 666,  
  "position" => "QA",  
  email" => "vic@mail.ru",  
  "age" => 31}

- **STEPS:**  
  1.Отправить POST запрос на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  2.Проверить код ответа  
  3.Проверить тело ответа
- **EXPECTED RESULTS:**  
  1   
  2.Код ответа 400  
  3.Тело ответа имеет следующий вид: {"message": "string"}
- **STATUS:** passed


---


- **ID:** emp034
- **Priority:** A
- **Requirement:** 4.1
- **TITLE:** Добавление сотрудника, "name" float
- **ADDITIONAL INFO:** Параметры POST запроса передаются в теле запроса в JSON объекте  
  {"name" => 66.6,  
  "position" => "QA",  
  email" => "vic@mail.ru",  
  "age" => 31}

- **STEPS:**  
  1.Отправить POST запрос на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  2.Проверить код ответа  
  3.Проверить тело ответа
- **EXPECTED RESULTS:**  
  1   
  2.Код ответа 400  
  3.Тело ответа имеет следующий вид: {"message": "string"}
- **STATUS:** passed


---


- **ID:** emp035
- **Priority:** A
- **Requirement:** 4.1
- **TITLE:** Добавление сотрудника, "name" тип array
- **ADDITIONAL INFO:** Параметры POST запроса передаются в теле запроса в JSON объекте  
  {"name" => [],  
  "position" => "QA",  
  email" => "vic@mail.ru",  
  "age" => 31}

- **STEPS:**  
  1.Отправить POST запрос на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  2.Проверить код ответа  
  3.Проверить тело ответа
- **EXPECTED RESULTS:**  
  1   
  2.Код ответа 400  
  3.Тело ответа имеет следующий вид: {"message": "string"}
- **STATUS:** passed


---


- **ID:** emp036
- **Priority:** A
- **Requirement:** 4.1
- **TITLE:** Добавление сотрудника, "name" тип bool
- **ADDITIONAL INFO:** Параметры POST запроса передаются в теле запроса в JSON объекте  
  {"name" => False,  
  "position" => "QA",  
  email" => "vic@mail.ru",  
  "age" => 31}

- **STEPS:**  
  1.Отправить POST запрос на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  2.Проверить код ответа  
  3.Проверить тело ответа
- **EXPECTED RESULTS:**  
  1   
  2.Код ответа 400  
  3.Тело ответа имеет следующий вид: {"message": "string"}
- **STATUS:** passed


---


- **ID:** emp037
- **Priority:** A
- **Requirement:** 4.1
- **TITLE:** Добавление сотрудника, "name" null
- **ADDITIONAL INFO:** Параметры POST запроса передаются в теле запроса в JSON объекте  
  {"name" => null,  
  "position" => "QA",  
  email" => "vic@mail.ru",  
  "age" => 31}

- **STEPS:**  
  1.Отправить POST запрос на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  2.Проверить код ответа  
  3.Проверить тело ответа
- **EXPECTED RESULTS:**  
  1   
  2.Код ответа 400  
  3.Тело ответа имеет следующий вид: {"message": "string"}
- **STATUS:** passed


---


- **ID:** emp038
- **Priority:** A
- **Requirement:** 4.1
- **TITLE:** Добавление сотрудника, "name" пустая строка
- **ADDITIONAL INFO:** Параметры POST запроса передаются в теле запроса в JSON объекте  
  {"name" => "",  
  "position" => "QA",  
  email" => "vic@mail.ru",  
  "age" => 31}

- **STEPS:**  
  1.Отправить POST запрос на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  2.Проверить код ответа  
  3.Проверить тело ответа
- **EXPECTED RESULTS:**  
  1   
  2.Код ответа 400  
  3.Тело ответа имеет следующий вид: {"message": "string"}
- **STATUS:** failed


---


- **ID:** emp039
- **Priority:** A
- **Requirement:** 4.1
- **TITLE:** Добавление сотрудника, "name" пустая строка с пробелами
- **ADDITIONAL INFO:** Параметры POST запроса передаются в теле запроса в JSON объекте  
  {"name" => "   ",  
  "position" => "QA",  
  email" => "vic@mail.ru",  
  "age" => 31}

- **STEPS:**  
  1.Отправить POST запрос на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  2.Проверить код ответа  
  3.Проверить тело ответа
- **EXPECTED RESULTS:**  
  1   
  2.Код ответа 400  
  3.Тело ответа имеет следующий вид: {"message": "string"}
- **STATUS:** failed


---


- **ID:** emp040
- **Priority:** A
- **Requirement:** 3
- **TITLE:** Получение сотрудника по id
- **Precondition:** Сотрудник добавлен, известен id 

- **STEPS:**  
  1.Отправить GET запрос на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/{id}  
  2.Проверить код ответа  
  3.Проверить тело ответа
- **EXPECTED RESULTS:**  
  1   
  2.Код ответа 200  
  3.Тело ответа возвращается в формате json и имеет следующий вид:  
    {"id": 0,  
    "name": "string",  
    "email": "string",  
    "position": "string",  
    "age": 0}
- **STATUS:** passed


---


- **ID:** emp041
- **Priority:** A
- **Requirement:** 3
- **TITLE:** Получение сотрудника по несуществующему id
- **ADDITIONAL INFO:** {"id": 999999}

- **STEPS:**  
  1.Отправить GET запрос на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/{id}  
  2.Проверить код ответа  
  3.Проверить тело ответа
- **EXPECTED RESULTS:**  
  1   
  2.Код ответа 404  
  3.Тело ответа возвращается в формате json и имеет следующий вид:  
  {"message": "string"}
- **STATUS:** passed


---


- **ID:** emp042
- **Priority:** A
- **Requirement:** 3
- **TITLE:** Получение сотрудника по некорректному id
- **ADDITIONAL INFO:** {"id": "getemployee"}

- **STEPS:**  
  1.Отправить GET запрос на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/{id}  
  2.Проверить код ответа  
  3.Проверить тело ответа
- **EXPECTED RESULTS:**  
  1   
  2.Код ответа 404  
  3.Тело ответа возвращается в формате json и имеет следующий вид:  
  {"message": "string"}
- **STATUS:** failed


---


- **ID:** emp043
- **Priority:** A
- **Requirement:** 3
- **TITLE:** Получение сотрудника без указания id
- **ADDITIONAL INFO:** {"id": ""}

- **STEPS:**  
  1.Отправить GET запрос на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/{id}  
  2.Проверить код ответа  
  3.Проверить тело ответа
- **EXPECTED RESULTS:**  
  1   
  2.Код ответа 404  
  3.Тело ответа возвращается в формате json и имеет следующий вид:  
  {"message": "string"}
- **STATUS:** failed


---


- **ID:** emp044
- **Priority:** A
- **Requirement:** 5
- **TITLE:** Удаление сотрудника по корректному id
- **Precondition:**  Сотрудник добавлен в базу данных, известен его id  

- **STEPS:**   
  1.Отправить delete запрос на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/remove/{id}  
  2.Проверить код ответа  
  3.Убедиться, что сотрудник удалён из бд, сделать запрос на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/{id}   
  4.Проверить код ответа  
  5.Проверить тело ответа
- **EXPECTED RESULTS:**  
  1   
  2.Код ответа 204  
  3  
  4.Код ответа 404  
  5.Тело ответа имее вид {"message": "string"}  
- **STATUS:** failed


---


- **ID:** emp045
- **Priority:** A
- **Requirement:** 5
- **TITLE:** Удаление сотрудника по несуществующему id
- **STEPS:**   
  1.Отправить delete запрос на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/remove/{id}  
  2.Проверить код ответа
- **EXPECTED RESULTS:**  
  1   
  2.Код ответа 204
- **STATUS:** passed


---


- **ID:** emp046
- **Priority:** A
- **Requirement:** 5
- **TITLE:** Удаление сотрудника по некорректному id
- **ADDITIONAL INFO:**  
  ["id" => "aaa"]  
  ["id" => ""]  
  ["id" => "@#$%]  
  ["id" => False]

- **STEPS:**   
  1.Отправить delete запрос с некорректным id на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/remove/{id}  
  2.Проверить код ответа  
  3.Проверить тело ответа
- **EXPECTED RESULTS:**  
  1   
  2.Код ответа 404  
  3.Тело ответа имеет вид {"message": "string"}
- **STATUS:** failed