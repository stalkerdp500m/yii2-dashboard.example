<p align="center">
 <h1 align="center">Yii 2 Basic Project Dashboard</h1>
    <br>
    <a href="https://yii-dashboard.exempl-projects.ml/" target="_blank">
        <img src="https://yii-dashboard.exempl-projects.ml/dashbourd-screen.png" height="300px">
    </a>

</p>


УСТАНОВКА
------------
Клонируйте репозитрий
~~~
git clone https://github.com/stalkerdp500m/yii2-dashboard.exempl
~~~

Перейдите в папку проекта
~~~
cd .\yii2-dashboard.exempl\
~~~

Установите зависимости
~~~
composer install
~~~

Создайте базу данных yii2dasboard и файл /config/db.php


```php
/config/db.php



return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2dasboard',
    'username' => имя пользователя,
    'password' => пароль,
    'charset' => 'utf8',
];
```

Мигрируйте базу данных
~~~
php yii migrate
~~~

Заполните базу данных тесторвыми значениями (количество тестовых значений можно указать в commands/SeedController.php)
~~~
php yii seed generate
~~~

Запустите веб сервер Yii2
~~~
php yii serve
~~~

ДЕМО
-------

Доступно по адресу [https://yii-dashboard.exempl-projects.ml/](https://yii-dashboard.exempl-projects.ml/)


