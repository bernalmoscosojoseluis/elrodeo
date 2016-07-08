<?php

use yii\db\Migration;

/**
 * Handles the creation for table `areatrabajo`.
 */
class m160705_002351_create_areatrabajo extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('areatrabajo', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('areatrabajo');
    }
}
