<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Basic Project Dashboard</h1>
    <br>
</p>


УСТАНОВКА
------------
Клонируйте репозитрий
~~~
git clone https://github.com/stalkerdp500m/yii2-dashboard.exempl
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


