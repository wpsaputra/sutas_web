<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Master;

/**
 * MasterSearch represents the model behind the search form of `app\models\Master`.
 */
class MasterSearch extends Master
{
    /**
     * {@inheritdoc}
     */

    public $last_position;
     
    public function rules()
    {
        return [
            [['kode_qr_code', 'nbs', 'namaprop', 'namakab', 'namakec', 'namadesa', 'ket_strata', 'kd_mtd', 'metode'], 'safe'],
            [['prop', 'kab', 'kec', 'desa', 'klas', 'nks_sutas', 'j_rutatani', 'strata', 'j_ruta'], 'integer'],
            // custom
            [['last_position'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        // $query = Master::find();
        $query = Master::find()->joinWith('batches');

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        // custom
        $dataProvider->sort->attributes['last_position'] = [
            'asc' => ['id_posisi' => SORT_ASC, 'date_terima' => SORT_DESC],
            'desc' => ['id_posisi' => SORT_DESC, 'date_terima' => SORT_DESC],
        ];

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'prop' => $this->prop,
            'kab' => $this->kab,
            'kec' => $this->kec,
            'desa' => $this->desa,
            'klas' => $this->klas,
            'nks_sutas' => $this->nks_sutas,
            'j_rutatani' => $this->j_rutatani,
            'strata' => $this->strata,
            'j_ruta' => $this->j_ruta,
            'batch.id_posisi' => $this->last_position,
        ]);

        $query->andFilterWhere(['like', 'kode_qr_code', $this->kode_qr_code])
            ->andFilterWhere(['like', 'nbs', $this->nbs])
            ->andFilterWhere(['like', 'namaprop', $this->namaprop])
            ->andFilterWhere(['like', 'namakab', $this->namakab])
            ->andFilterWhere(['like', 'namakec', $this->namakec])
            ->andFilterWhere(['like', 'namadesa', $this->namadesa])
            ->andFilterWhere(['like', 'ket_strata', $this->ket_strata])
            ->andFilterWhere(['like', 'kd_mtd', $this->kd_mtd])
            ->andFilterWhere(['like', 'metode', $this->metode]);

        return $dataProvider;
    }
}
