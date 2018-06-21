<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "batch".
 *
 * @property int $id
 * @property string $kode_prop
 * @property string $kode_kab
 * @property string $kode_kec
 * @property string $kode_desa
 * @property string $kode_bs
 * @property string $id_barcode
 * @property string $no_hp
 * @property int $id_posisi
 * @property int $jumlah_l1
 * @property int $jumlah_l2
 * @property string $date_terima
 *
 * @property Hp $noHp
 * @property Posisi $posisi
 * @property Master $barcode
 */
class Batch extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'batch';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_prop', 'kode_kab', 'kode_kec', 'kode_desa', 'kode_bs', 'id_barcode', 'no_hp', 'id_posisi', 'jumlah_l1', 'jumlah_l2'], 'required'],
            [['id_posisi', 'jumlah_l1', 'jumlah_l2'], 'integer'],
            [['date_terima'], 'safe'],
            [['kode_prop', 'kode_kab'], 'string', 'max' => 2],
            [['kode_kec', 'kode_desa'], 'string', 'max' => 3],
            [['kode_bs'], 'string', 'max' => 4],
            [['id_barcode'], 'string', 'max' => 50],
            [['no_hp'], 'string', 'max' => 14],
            [['no_hp'], 'exist', 'skipOnError' => true, 'targetClass' => Hp::className(), 'targetAttribute' => ['no_hp' => 'no_hp']],
            [['id_posisi'], 'exist', 'skipOnError' => true, 'targetClass' => Posisi::className(), 'targetAttribute' => ['id_posisi' => 'id']],
            [['id_barcode'], 'exist', 'skipOnError' => true, 'targetClass' => Master::className(), 'targetAttribute' => ['id_barcode' => 'kode_qr_code']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode_prop' => 'Kode Prop',
            'kode_kab' => 'Kode Kab',
            'kode_kec' => 'Kode Kec',
            'kode_desa' => 'Kode Desa',
            'kode_bs' => 'Kode Bs',
            'id_barcode' => 'Id Barcode',
            'no_hp' => 'No Hp',
            'id_posisi' => 'Id Posisi',
            'jumlah_l1' => 'Jumlah L1',
            'jumlah_l2' => 'Jumlah L2',
            'date_terima' => 'Date Terima',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNoHp()
    {
        return $this->hasOne(Hp::className(), ['no_hp' => 'no_hp']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosisi()
    {
        return $this->hasOne(Posisi::className(), ['id' => 'id_posisi']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBarcode()
    {
        return $this->hasOne(Master::className(), ['kode_qr_code' => 'id_barcode']);
    }
}
