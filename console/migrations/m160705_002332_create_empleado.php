<?php

use yii\db\Migration;

/**
 * Handles the creation for table `empleado`.
 */
class m160705_002332_create_empleado extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('empleado', [
            'id' => $this->primaryKey(),
            'CI'=>$this->string(10)->notNull()->unique(),
            'nombres'=>
            'apellidos'=>
            'telefono'=>
            'email'=>
            'ocupacion'=>
            'areatrabajo_id'=>
            'estadocivil'=>
            'fechaingreso'=>
            'sueldomes'=>
            'eliminado'=>
            'imagen'=>
            'imagenombre'=>
            'imagentamano'=>
            'formato'=>
            'created_at'=>
            'updated_at'
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('empleado');
    }
}
