<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hp".
 *
 * @property string $no_hp
 * @property string $nama
 * @property int $id_status
 *
 * @property Batch[] $batches
 * @property Status $status
 */
class Hp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hp';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_hp', 'nama', 'id_status'], 'required'],
            [['id_status'], 'integer'],
            [['no_hp'], 'string', 'max' => 14],
            [['nama'], 'string', 'max' => 50],
            [['no_hp'], 'unique'],
            [['id_status'], 'exist', 'skipOnError' => true, 'targetClass' => Status::className(), 'targetAttribute' => ['id_status' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_hp' => 'No Hp',
            'nama' => 'Nama',
            'id_status' => 'Id Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBatches()
    {
        return $this->hasMany(Batch::className(), ['no_hp' => 'no_hp']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(Status::className(), ['id' => 'id_status']);
    }
}
