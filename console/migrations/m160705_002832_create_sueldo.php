<?php

use yii\db\Migration;

/**
 * Handles the creation for table `sueldo`.
 */
class m160705_002832_create_sueldo extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('sueldo', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('sueldo');
    }
}
