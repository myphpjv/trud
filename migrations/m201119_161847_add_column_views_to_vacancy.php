<?php

use yii\db\Migration;

/**
 * Class m201119_161847_add_column_views_to_vacancy
 */
class m201119_161847_add_column_views_to_vacancy extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('vacancy', 'views', $this->integer() . ' DEFAULT 0');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('vacancy', 'views');
    }
}
