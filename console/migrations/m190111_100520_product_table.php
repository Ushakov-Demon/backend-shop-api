<?php

use yii\db\Migration;

/**
 * Class m190111_100520_product_table
 */
class m190111_100520_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        {
            $this->createTable('product', [
                'id' => $this->primaryKey(),
                'title'=>$this->string(),
                'brand'=>$this->string()->defaultValue(null),
                'sex'=>$this->integer()->defaultValue(null),
                'texture'=>$this->text()->defaultValue(null),
                'description'=>$this->text(),
                'images'=>$this->string()->defaultValue(null),
                'price'=>$this->string(),
                'colors'=>$this->string()->defaultValue(null),
                'sizes'=>$this->string()->defaultValue(null),
                'status'=>$this->integer()->defaultValue(0),
                'views'=>$this->integer()->defaultValue(null),
                'category_id'=>$this->integer(),
                'date'=>$this->date(),
            ]);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('product');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190111_100520_product_table cannot be reverted.\n";

        return false;
    }
    */
}
