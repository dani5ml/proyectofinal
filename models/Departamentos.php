<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "departamentos".
 *
 * @property int $id_depart
 * @property string $departamento
 *
 * @property Empleados[] $empleados
 * @property Proyectos[] $proyectos
 */
class Departamentos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'departamentos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['departamento'], 'required'],
            [['departamento'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_depart' => 'Id Depart',
            'departamento' => 'Departamento',
        ];
    }

    /**
     * Gets query for [[Empleados]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEmpleados()
    {
        return $this->hasMany(Empleados::className(), ['id_depart' => 'id_depart']);
    }

    /**
     * Gets query for [[Proyectos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProyectos()
    {
        return $this->hasMany(Proyectos::className(), ['id_depart' => 'id_depart']);
    }
}
