<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "servicio".
 *
 * @property int $id_servicio
 * @property string $servicio
 *
 * @property Clientes[] $clientes
 */
class Servicio extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'servicio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['servicio'], 'required'],
            [['servicio'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_servicio' => 'Id Servicio',
            'servicio' => 'Servicio',
        ];
    }

    /**
     * Gets query for [[Clientes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getClientes()
    {
        return $this->hasMany(Clientes::className(), ['id_servicio' => 'id_servicio']);
    }
}
