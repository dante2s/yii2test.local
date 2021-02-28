<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%feedback}}`.
 */
class m210228_102645_create_feedback_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%feedback}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->string(100),
            'name'=>$this->string(255),
            'surname'=>$this->string(255),
            'phone'=>$this->string(20),
            'email' => $this->string(100),
            'text'=>$this->string(500)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%feedback}}');
    }
}
