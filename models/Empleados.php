<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "empleados".
 *
 * @property int $id_emple
 * @property string $nombre
 * @property string $apellido
 * @property int $id_depart
 * @property string $usuario
 *
 * @property Departamentos $depart
 */
class Empleados extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'empleados';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'apellido', 'id_depart', 'usuario'], 'required'],
            [['id_depart'], 'integer'],
            [['nombre', 'apellido', 'usuario'], 'string', 'max' => 15],
            [['id_depart'], 'exist', 'skipOnError' => true, 'targetClass' => Departamentos::className(), 'targetAttribute' => ['id_depart' => 'id_depart']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_emple' => 'Id Emple',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'id_depart' => 'Id Depart',
            'usuario' => 'Usuario',
        ];
    }

    /**
     * Gets query for [[Depart]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDepart()
    {
        return $this->hasOne(Departamentos::className(), ['id_depart' => 'id_depart']);
    }
}
