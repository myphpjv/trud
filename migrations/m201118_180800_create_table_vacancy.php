<?php

use yii\db\Migration;

/**
 * Class m201118_180800_create_table_vacancy
 */
class m201118_180800_create_table_vacancy extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('vacancy', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'company' => $this->string()->notNull(),
            'title' => $this->string()->notNull(),
            'salary' => $this->integer(),
            'description' => $this->string(10000)->notNull(),
            'category_id' => $this->integer()->notNull(),
            'region_id' => $this->integer()->notNull(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer()
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('vacancy');
    }
}
