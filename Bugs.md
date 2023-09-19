- **ID:** emp_bug_001
- **SUMMARY:** Успешное добавление сотрудника при строковом значении поля "возраст"
- **DESCRIPTION:** При post запросе со строковым типом данных в поле "age", происходит успешное добавление сотрудника  
**Act:** успешное добавление сотрудника, статус-код 201  
**Exp:** ошибка 400, validation failed
- **REQ:** 4.4
- **STEPS TO REPRODUCE:**  
  1.Отправить POST запрос в формате json на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  {"name" => "Vic",  
  "email" => "vic@mail.ru",  
  "position" => "QA",  
  "age" => "31"}

- **reproducibility:** всегда  
- **severity:** средняя
- **priority:** средний
  

---


- **ID:** emp_bug_002
- **SUMMARY:** Успешное добавление сотрудника при дробном значеним поля "возраст"
- **DESCRIPTION:** При post запросе с типом данных "float" в поле "age", происходит успешное добавление сотрудника  
  **Act:** успешное добавление сотрудника, статус-код 201  
  **Exp:** ошибка 400, validation failed
- **REQ:** 4.4
- **STEPS TO REPRODUCE:**  
  1.Отправить POST запрос в формате json на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  {"name" => "Vic",  
  "email" => "vic@mail.ru",  
  "position" => "QA",  
  "age" => 31.5}

- **reproducibility:** всегда
- **severity:** средняя
- **priority:** средний
- **additional info:**  
  Приложение приводит любой тип вводимых данных к типу "string"


---


- **ID:** emp_bug_003
- **SUMMARY:** Ошибка 500 при отсутствующем поле "возраст"
- **DESCRIPTION:** При post запросе без указания поля "age", происходит ошибка сервера  
  **Act:** ошибка 500, Internal Server Error  
  **Exp:** ошибка 400, validation failed
- **REQ:** 4.4
- **STEPS TO REPRODUCE:**  
  1.Отправить POST запрос в формате json на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  {"name" => "Vic",  
  "email" => "vic@mail.ru",  
  "position" => "QA"}

- **reproducibility:** всегда
- **severity:** высокая
- **priority:** средний


---


- **ID:** emp_bug_004
- **SUMMARY:** Успешное добавление сотрудника при булевом значеним поля "возраст"
- **DESCRIPTION:** При post запросе с типом данных "bool" в поле "age", происходит успешное добавление сотрудника  
  **Act:** успешное добавление сотрудника, статус-код 201  
  **Exp:** ошибка 400, validation failed
- **REQ:** 4.4
- **STEPS TO REPRODUCE:**  
  1.Отправить POST запрос в формате json на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  {"name" => "Vic",  
  "email" => "vic@mail.ru",  
  "position" => "QA",  
  "age" => False}

- **reproducibility:** всегда
- **severity:** средняя
- **priority:** средний
- **additional info:**  
  Приложение приводит тип вводимых данных "bool" к пустой строке


---


- **ID:** emp_bug_005
- **SUMMARY:** Успешное добавление сотрудника при пустой строке в поле "возраст"
- **DESCRIPTION:** При post запросе с указанием пустой строки в поле "age", происходит успешное добавление сотрудника  
  **Act:** успешное добавление сотрудника, статус-код 201  
  **Exp:** ошибка 400, validation failed
- **REQ:** 4.4
- **STEPS TO REPRODUCE:**  
  1.Отправить POST запрос в формате json на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  {"name" => "Vic",  
  "email" => "vic@mail.ru",  
  "position" => "QA",  
  "age" => ""}

- **reproducibility:** всегда
- **severity:** высокая
- **priority:** средний


---


- **ID:** emp_bug_006
- **SUMMARY:** Успешное добавление сотрудника при заполнении пробелами поля "возраст"
- **DESCRIPTION:** При post запросе с заполнением пробелами строкового значения поля "age", происходит успешное добавление сотрудника  
  **Act:** успешное добавление сотрудника, статус-код 201  
  **Exp:** ошибка 400, validation failed
- **REQ:** 4.4
- **STEPS TO REPRODUCE:**  
  1.Отправить POST запрос в формате json на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  {"name" => "Vic",  
  "email" => "vic@mail.ru",  
  "position" => "QA",  
  "age" => "   "}

- **reproducibility:** всегда
- **severity:** высокая
- **priority:** средний


---


- **ID:** emp_bug_007
- **SUMMARY:** Успешное добавление сотрудника при типе array в поле "возраст"
- **DESCRIPTION:** При post запросе с указанием массива в поле "age", происходит успешное добавление сотрудника  
  **Act:** успешное добавление сотрудника, статус-код 201  
  **Exp:** ошибка 400, validation failed
- **REQ:** 4.4
- **STEPS TO REPRODUCE:**  
  1.Отправить POST запрос в формате json на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  {"name" => "Vic",  
  "email" => "vic@mail.ru",  
  "position" => "QA",  
  "age" => []}

- **reproducibility:** всегда
- **severity:** высокая
- **priority:** средний


---


- **ID:** emp_bug_008
- **SUMMARY:** Успешное добавление сотрудника при null в поле "возраст"
- **DESCRIPTION:** При post запросе с указанием null в поле "age", происходит успешное добавление сотрудника  
  **Act:** успешное добавление сотрудника, статус-код 201  
  **Exp:** ошибка 400, validation failed
- **REQ:** 4.4
- **STEPS TO REPRODUCE:**  
  1.Отправить POST запрос в формате json на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  {"name" => "Vic",  
  "email" => "vic@mail.ru",  
  "position" => "QA",  
  "age" => null}

- **reproducibility:** всегда
- **severity:** высокая
- **priority:** средний


---


- **ID:** emp_bug_009
- **SUMMARY:** Успешное добавление сотрудника с неуникальным email 
- **DESCRIPTION:** При повторном post запросе с одинаковым поле "email", происходит успешное добавление сотрудника  
  **Act:** успешное добавление сотрудника, статус-код 201  
  **Exp:** ошибка 400, validation failed
- **REQ:** 4.2
- **STEPS TO REPRODUCE:**  
  1.Отправить POST запрос в формате json на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  {"name" => "Vic",  
  "email" => "vic@mail.ru",  
  "position" => "QA",  
  "age" => 31}  
  2.Повторить шаг 1

- **reproducibility:** всегда
- **severity:** высокая
- **priority:** высокий


---


- **ID:** emp_bug_010
- **SUMMARY:** Успешное добавление сотрудника без "position"
- **DESCRIPTION:** При post запросе без поля "position", происходит успешное добавление сотрудника  
  **Act:** успешное добавление сотрудника, статус-код 201  
  **Exp:** ошибка 400, validation failed
- **REQ:** 4.3
- **STEPS TO REPRODUCE:**  
  1.Отправить POST запрос в формате json на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  {"name" => "Vic",  
  "email" => "vic@mail.ru",  
  "age" => 31}  

- **reproducibility:** всегда
- **severity:** средняя
- **priority:** средний
- **additional info:**  Если не передавать в post запросе "position", приложение автоматически подставляет ему значение "null"


---


- **ID:** emp_bug_011
- **SUMMARY:** Успешное добавление сотрудника при "null" в "position"
- **DESCRIPTION:** При post запросе со значением null в поле "position", происходит успешное добавление сотрудника  
  **Act:** успешное добавление сотрудника, статус-код 201  
  **Exp:** ошибка 400, validation failed
- **REQ:** 4.3
- **STEPS TO REPRODUCE:**  
  1.Отправить POST запрос в формате json на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  {"name" => "Vic",  
  "email" => "vic@mail.ru",  
  "position" => null,  
  "age" => 31}

- **reproducibility:** всегда
- **severity:** средняя
- **priority:** средний


---


- **ID:** emp_bug_012
- **SUMMARY:** Успешное добавление сотрудника при пустой строке в "position"
- **DESCRIPTION:** При post запросе с пустым строковым значением в поле "position", происходит успешное добавление сотрудника  
  **Act:** успешное добавление сотрудника, статус-код 201  
  **Exp:** ошибка 400, validation failed
- **REQ:** 4.3
- **STEPS TO REPRODUCE:**  
  1.Отправить POST запрос в формате json на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  {"name" => "Vic",  
  "email" => "vic@mail.ru",  
  "position" => "",  
  "age" => 31}

- **reproducibility:** всегда
- **severity:** средняя
- **priority:** средний


---


- **ID:** emp_bug_013
- **SUMMARY:** Успешное добавление сотрудника при заполнении пробелами поля "position"
- **DESCRIPTION:** При post запросе с заполнением пробелами строкового значения поля "position", происходит успешное добавление сотрудника  
  **Act:** успешное добавление сотрудника, статус-код 201  
  **Exp:** ошибка 400, validation failed
- **REQ:** 4.3
- **STEPS TO REPRODUCE:**  
  1.Отправить POST запрос в формате json на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  {"name" => "Vic",  
  "email" => "vic@mail.ru",  
  "position" => "   ",  
  "age" => 31}

- **reproducibility:** всегда
- **severity:** средняя
- **priority:** средний


---


- **ID:** emp_bug_014
- **SUMMARY:** Успешное добавление сотрудника без "name"
- **DESCRIPTION:** При post запросе без поля "name", происходит успешное добавление сотрудника  
  **Act:** успешное добавление сотрудника, статус-код 201  
  **Exp:** ошибка 400, validation failed
- **REQ:** 4.1
- **STEPS TO REPRODUCE:**  
  1.Отправить POST запрос в формате json на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  {"email" => "vic@mail.ru",  
  "position" => "QA",  
  "age" => 31}

- **reproducibility:** всегда
- **severity:** высокая
- **priority:** средний
- **additional info:** Если не указывать поле "name", приложение подставляет в значение пустую строку


---


- **ID:** emp_bug_015
- **SUMMARY:** Успешное добавление сотрудника с пустым строковым значением в поле "name"
- **DESCRIPTION:** При post запросе с пустым строковым значением в поле "name", происходит успешное добавление сотрудника  
  **Act:** успешное добавление сотрудника, статус-код 201  
  **Exp:** ошибка 400, validation failed
- **REQ:** 4.1
- **STEPS TO REPRODUCE:**  
  1.Отправить POST запрос в формате json на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  {"name" => "",  
  "email" => "vic@mail.ru",  
  "position" => "QA",  
  "age" => 31}

- **reproducibility:** всегда
- **severity:** высокая
- **priority:** средний


---


- **ID:** emp_bug_016
- **SUMMARY:** Успешное добавление сотрудника при заполнении пробелами поля "name"
- **DESCRIPTION:** При post запросе с заполнением пробелами строкового значения поля "name", происходит успешное добавление сотрудника  
  **Act:** успешное добавление сотрудника, статус-код 201  
  **Exp:** ошибка 400, validation failed
- **REQ:** 4.1
- **STEPS TO REPRODUCE:**  
  1.Отправить POST запрос в формате json на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/add  
  {"name" => "   ",  
  "email" => "vic@mail.ru",  
  "position" => "QA",  
  "age" => 31}

- **reproducibility:** всегда
- **severity:** высокая
- **priority:** средний


---


- **ID:** emp_bug_017
- **SUMMARY:** Метод GET возвращает поле "age" с типом "string"
- **DESCRIPTION:** При get запросе возвращается тело ответа, поле "age" возвращается с типом "string"  
  **Act:** статус 200, тело ответа в формате json, поле "age" с типом "string"  
  **Exp:** статус 200, тело ответа в формате json, поле "age" с типом "integer"
- **REQ:** 3
- **STEPS TO REPRODUCE:**  
  1.Отправить GET запрос с существующим id на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/{id}

- **reproducibility:** всегда
- **severity:** низкая
- **priority:** низкий
- **additional info:** Несмотря на неверный тип возвращаемых данных, приложение работает


---


- **ID:** emp_bug_018
- **SUMMARY:** Ошибка сервера при get запросе с некорректным id
- **DESCRIPTION:** При get запросе с указанием некорректного id, ошибка 500, Internal Server Error  
  **Act:** статус 500  
  **Exp:** статус 404
- **REQ:** 3
- **STEPS TO REPRODUCE:**  
  1.Отправить GET запрос на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/getemployee
- **reproducibility:** всегда
- **severity:** средняя
- **priority:** средний


---


- **ID:** emp_bug_019
- **SUMMARY:** Ошибка сервера при get запросе без id
- **DESCRIPTION:** При get запросе без указания id, ошибка 500, Internal Server Error  
  **Act:** статус 500  
  **Exp:** статус 404
- **REQ:** 3
- **STEPS TO REPRODUCE:**  
  1.Отправить GET запрос на https://main-bvxea6i-p5ymayxy7m4au.de-2.platformsh.site/api/v1/employee/getemployee/{id}
- **reproducibility:** всегда
- **severity:** средняя
- **priority:** средний