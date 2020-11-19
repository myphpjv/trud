Установка проекта:

1. git clone https://github.com/myphpjv/trud.git
2. в консоли в корне проекта composer install
3. в папке config переименовать db-local.php в db.php
4. в db.php указать название БД 'dbname' и данные для доступа: 'user', 'password'
5. в консоли в корне проекта php yii migrate и подтвердить yes
6. в консоли в корне проекта sudo chmod -R 777 web/assets
