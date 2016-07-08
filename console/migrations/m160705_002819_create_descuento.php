<?php

use yii\db\Migration;

/**
 * Handles the creation for table `descuento`.
 */
class m160705_002819_create_descuento extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('descuento', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('descuento');
    }
}
