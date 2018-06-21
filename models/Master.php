<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "master".
 *
 * @property string $kode_qr_code
 * @property int $prop
 * @property int $kab
 * @property int $kec
 * @property int $desa
 * @property string $nbs
 * @property string $namaprop
 * @property string $namakab
 * @property string $namakec
 * @property string $namadesa
 * @property int $klas
 * @property int $nks_sutas
 * @property int $j_rutatani
 * @property int $strata
 * @property string $ket_strata
 * @property int $j_ruta
 * @property string $kd_mtd
 * @property string $metode
 *
 * @property Batch[] $batches
 */
class Master extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'master';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_qr_code'], 'required'],
            [['prop', 'kab', 'kec', 'desa', 'klas', 'nks_sutas', 'j_rutatani', 'strata', 'j_ruta'], 'integer'],
            [['kode_qr_code'], 'string', 'max' => 50],
            [['nbs'], 'string', 'max' => 4],
            [['namaprop'], 'string', 'max' => 17],
            [['namakab'], 'string', 'max' => 16],
            [['namakec'], 'string', 'max' => 19],
            [['namadesa'], 'string', 'max' => 29],
            [['ket_strata'], 'string', 'max' => 26],
            [['kd_mtd'], 'string', 'max' => 1],
            [['metode'], 'string', 'max' => 10],
            [['kode_qr_code'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_qr_code' => 'Kode Qr Code',
            'prop' => 'Prop',
            'kab' => 'Kab',
            'kec' => 'Kec',
            'desa' => 'Desa',
            'nbs' => 'Nbs',
            'namaprop' => 'Namaprop',
            'namakab' => 'Namakab',
            'namakec' => 'Namakec',
            'namadesa' => 'Namadesa',
            'klas' => 'Klas',
            'nks_sutas' => 'Nks Sutas',
            'j_rutatani' => 'J Rutatani',
            'strata' => 'Strata',
            'ket_strata' => 'Ket Strata',
            'j_ruta' => 'J Ruta',
            'kd_mtd' => 'Kd Mtd',
            'metode' => 'Metode',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBatches()
    {
        return $this->hasMany(Batch::className(), ['id_barcode' => 'kode_qr_code']);
    }
}
