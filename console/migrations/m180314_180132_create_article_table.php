<?php

use yii\db\Migration;

/**
 * Handles the creation of table `article`.
 */
class m180314_180132_create_article_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        $this->createTable('{{%article}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'desc' => $this->string()->null(),
            'text' => 'MEDIUMTEXT',
            'status' => $this->boolean()->defaultValue(1),
            'category_id' => $this->integer()->null(),
            'published_at' => $this->integer()->null(),
            'created_at' => $this->integer()->null(),
            'updated_at' => $this->integer()->null(),
        ],$tableOptions);

        $this->createIndex('{{%idx-article-category_id}}', '{{%article}}', 'category_id');
        $this->addForeignKey('{{%fk-article-category_id}}', '{{%article}}', 'category_id', '{{%category}}', 'id', 'CASCADE', 'CASCADE');

    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%article}}');
    }
}
