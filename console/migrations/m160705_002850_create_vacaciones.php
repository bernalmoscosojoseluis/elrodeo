<?php

use yii\db\Migration;

/**
 * Handles the creation for table `vacaciones`.
 */
class m160705_002850_create_vacaciones extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('vacaciones', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('vacaciones');
    }
}
