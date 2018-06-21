<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "posisi".
 *
 * @property int $id
 * @property string $posisi
 *
 * @property Batch[] $batches
 */
class Posisi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'posisi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['posisi'], 'required'],
            [['posisi'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'posisi' => 'Posisi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBatches()
    {
        return $this->hasMany(Batch::className(), ['id_posisi' => 'id']);
    }
}
