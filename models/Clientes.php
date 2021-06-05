<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clientes".
 *
 * @property int $id_cliente
 * @property string $nombre_empresa
 * @property string $CIF
 * @property string $correo_electronico
 * @property string $num_telf
 * @property int $id_servicio
 *
 * @property Servicio $servicio
 * @property Contratacion[] $contratacions
 */
class Clientes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'clientes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre_empresa', 'CIF', 'correo_electronico', 'num_telf', 'id_servicio'], 'required'],
            [['id_servicio'], 'integer'],
            [['nombre_empresa', 'correo_electronico'], 'string', 'max' => 35],
            [['CIF', 'num_telf'], 'string', 'max' => 9],
            [['id_servicio'], 'exist', 'skipOnError' => true, 'targetClass' => Servicio::className(), 'targetAttribute' => ['id_servicio' => 'id_servicio']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_cliente' => 'Id Cliente',
            'nombre_empresa' => 'Nombre Empresa',
            'CIF' => 'Cif',
            'correo_electronico' => 'Correo Electronico',
            'num_telf' => 'Num Telf',
            'id_servicio' => 'Id Servicio',
        ];
    }

    /**
     * Gets query for [[Servicio]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServicio()
    {
        return $this->hasOne(Servicio::className(), ['id_servicio' => 'id_servicio']);
    }

    /**
     * Gets query for [[Contratacions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getContratacions()
    {
        return $this->hasMany(Contratacion::className(), ['id_cliente' => 'id_cliente']);
    }
}
