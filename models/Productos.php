<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "productos".
 *
 * @property int $id
 * @property string $producto
 * @property string $descripcion
 * @property int $valor
 */
class Productos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'productos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['producto', 'descripcion', 'valor'], 'required'],
            [['valor'], 'integer'],
            [['producto'], 'string', 'max' => 50],
            [['descripcion'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'producto' => 'Producto',
            'descripcion' => 'Descripcion',
            'valor' => 'Valor',
        ];
    }
}
