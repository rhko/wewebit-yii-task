<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Basic Project Template</h1>
    <br>
</p>

INSTALLATION
------------


Clone the repo
~~~
git clone https://github.com/rhko/wewebit-yii-task.git
~~~

configure database connection from config/db.php
~~~
eturn [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=DB_NAME',
    'username' => YOUR_USERNAME,
    'password' => YOUR_PASSWORD,
    'charset' => 'utf8',
];

~~~

run migrations
~~~
php yii migrate
~~~

run application on local server
~~~
php yii serve
~~~