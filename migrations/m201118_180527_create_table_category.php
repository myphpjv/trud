<?php

use yii\db\Migration;

/**
 * Class m201118_180527_create_table_category
 */
class m201118_180527_create_table_category extends Migration
{
    public static $categories = [
        ['Бухгалтерия'], ['Производство'], ['Торговля'], ['Транспорт'], ['Туризм']
    ];

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()
        ], $tableOptions);

        $this->batchInsert('category', ['name'], self::$categories);
    }

    public function down()
    {
        $this->dropTable('category');
    }
}
