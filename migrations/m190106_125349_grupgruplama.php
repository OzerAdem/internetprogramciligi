<?php

use yii\db\Migration;

/**
 * Class m190106_125349_grupgruplama
 */
class m190106_125349_grupgruplama extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function Up()
    {
        $this->createTable(‘gruplar’, [
            ‘grupid’ => $this->primaryKey(),
            ‘grupadi’ => $this->string(255)->notNull(),
        ]);

        $this->createTable(‘kayit’, [
            ‘kayitid’ => $this->primaryKey(),
            ‘ad’ => $this->string(25)->notNull(),
            ‘soyad’ => $this->string(25)->notNull(),
            ‘email’ => $this->string(255)->notNull(),
            ‘numara’ => $this->string(25)->notNull(),
            ‘grup’ => $this->string(7)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function Down()
    {
        $this->dropTable(‘gruplar’);
        $this->dropTable(‘kayit’);
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190106_125349_grupgruplama cannot be reverted.\n";

        return false;
    }
    */
}
