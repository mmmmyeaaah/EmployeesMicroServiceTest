- **ID:** emp001
- **Priority:** A
- **Requirement:** 3
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