<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "proyectos".
 *
 * @property int $id_proyecto
 * @property string $nombre_proyecto
 * @property int $id_depart
 *
 * @property Contratacion[] $contratacions
 * @property Departamentos $depart
 */
class Proyectos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'proyectos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre_proyecto', 'id_depart'], 'required'],
            [['id_depart'], 'integer'],
            [['nombre_proyecto'], 'string', 'max' => 15],
            [['id_depart'], 'exist', 'skipOnError' => true, 'targetClass' => Departamentos::className(), 'targetAttribute' => ['id_depart' => 'id_depart']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_proyecto' => 'Id Proyecto',
            'nombre_proyecto' => 'Nombre Proyecto',
            'id_depart' => 'Id Depart',
        ];
    }

    /**
     * Gets query for [[Contratacions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getContratacions()
    {
        return $this->hasMany(Contratacion::className(), ['id_proyecto' => 'id_proyecto']);
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
