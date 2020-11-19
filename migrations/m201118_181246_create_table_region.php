<?php

use yii\db\Migration;

/**
 * Class m201118_181246_create_table_region
 */
class m201118_181246_create_table_region extends Migration
{
    public static $regions = [
        ['Винницкая'], ['Волынская'], ['Днепропетровская'], ['Донецкая'], ['Житомирская'], ['Закарпатская'],
        ['Запорожская'], ['Ивано-Франковская'], ['Киевская'], ['Кировоградская'], ['Луганская'], ['Львовская'],
        ['Николаевская'], ['Одесская'], ['Полтавская'], ['Ровненская'], ['Сумская'], ['Тернопольская'],
        ['Харьковская'], ['Херсонская'], ['Хмельницкая'], ['Черкасская'], ['Черниговская'], ['Черновицкая']
    ];

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('region', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()
        ], $tableOptions);

        $this->batchInsert('region', ['name'], self::$regions);
    }

    public function down()
    {
        $this->dropTable('region');
    }
}
