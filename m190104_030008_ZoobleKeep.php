<?php

use yii\db\Migration;

/**
 * Class m190104_030008_ZoobleKeep
 */
class m190104_030008_ZoobleKeep extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190104_030008_ZoobleKeep cannot be reverted.\n";

        return false;
    }

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('users', [
            'user_id' => $this->primaryKey(),
            'user_name'=> $this->String(),
            'password'=> $this->String(),
        
        ]);

        $this->createTable('note', [
            'note_id' => $this->primaryKey(),
            'note_title' => $this->String(),
            'user_id' => $this->String(),
            'edit_date' => $this->date(),
            'content'=>$this->String(),
        
        ]);
        $this->createTable('thrash', [
            'note_id' => $this->primaryKey(),
            'note_title' => $this->String(),
            'user_id' => $this->String(),
            'delete_date' => $this->date(),
            'content'=>$this->String(),
        
        ]);
        
    }
    

    public function down()
    {
        echo "m190104_030008_ZoobleKeep cannot be reverted.\n";
        $this->dropTable('users');
        $this->dropTable('thrash');
        $this->dropTable('note');
        

        return false;
    }
    
}
