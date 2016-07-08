<?php

use yii\db\Migration;

/**
 * Handles the creation for table `anticipo`.
 */
class m160705_002757_create_anticipo extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('anticipo', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('anticipo');
    }
}
