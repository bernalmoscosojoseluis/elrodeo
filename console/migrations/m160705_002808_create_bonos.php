<?php

use yii\db\Migration;

/**
 * Handles the creation for table `bonos`.
 */
class m160705_002808_create_bonos extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('bonos', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('bonos');
    }
}
