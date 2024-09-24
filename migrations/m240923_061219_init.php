<?php

use yii\db\Migration;

class m240923_061219_init extends Migration
{
    public function safeUp()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey()->unique(),
            'login' => $this->string()->notNull()->unique(),
            'password' => $this->string()->notNull(),
            'username' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'phone' => $this->string()->notNull(),
            'rating' => $this->float(),
            'links' => $this->string(),
            'description' => $this->text(),
            'category_id' => $this->integer(),
            'is_executor' => $this->boolean()->defaultValue('false'),
        ]);
        $this->createTable('categories', [
            'id' => $this->primaryKey()->unique(),
            'name' => $this->string()->notNull(),
        ]);
    }

    public function safeDown()
    {
        echo "m240923_061219_init cannot be reverted.\n";

        return false;
    }
}
