<?php

use yii\db\Migration;

/**
 * Handles the creation for table `viatico`.
 */
class m160705_002858_create_viatico extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('viatico', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('viatico');
    }
}
