<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contratacion".
 *
 * @property int $id_contrado
 * @property int $id_cliente
 * @property string $nombre_empresa
 * @property int $id_servicio
 * @property string $servicio
 * @property int $id_proyecto
 *
 * @property Clientes $cliente
 * @property Proyectos $proyecto
 */
class Contratacion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contratacion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_cliente', 'nombre_empresa', 'id_servicio', 'servicio', 'id_proyecto'], 'required'],
            [['id_cliente', 'id_servicio', 'id_proyecto'], 'integer'],
            [['nombre_empresa', 'servicio'], 'string', 'max' => 15],
            [['id_cliente'], 'exist', 'skipOnError' => true, 'targetClass' => Clientes::className(), 'targetAttribute' => ['id_cliente' => 'id_cliente']],
            [['id_proyecto'], 'exist', 'skipOnError' => true, 'targetClass' => Proyectos::className(), 'targetAttribute' => ['id_proyecto' => 'id_proyecto']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_contrado' => 'Id Contrado',
            'id_cliente' => 'Id Cliente',
            'nombre_empresa' => 'Nombre Empresa',
            'id_servicio' => 'Id Servicio',
            'servicio' => 'Servicio',
            'id_proyecto' => 'Id Proyecto',
        ];
    }

    /**
     * Gets query for [[Cliente]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCliente()
    {
        return $this->hasOne(Clientes::className(), ['id_cliente' => 'id_cliente']);
    }

    /**
     * Gets query for [[Proyecto]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProyecto()
    {
        return $this->hasOne(Proyectos::className(), ['id_proyecto' => 'id_proyecto']);
    }
}
