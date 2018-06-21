<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Batch;

/**
 * BatchSearch represents the model behind the search form of `app\models\Batch`.
 */
class BatchSearch extends Batch
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_posisi', 'jumlah_l1', 'jumlah_l2'], 'integer'],
            [['kode_prop', 'kode_kab', 'kode_kec', 'kode_desa', 'kode_bs', 'id_barcode', 'no_hp', 'date_terima'], 'safe'],
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
        $query = Batch::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'id_posisi' => $this->id_posisi,
            'jumlah_l1' => $this->jumlah_l1,
            'jumlah_l2' => $this->jumlah_l2,
            'date_terima' => $this->date_terima,
        ]);

        $query->andFilterWhere(['like', 'kode_prop', $this->kode_prop])
            ->andFilterWhere(['like', 'kode_kab', $this->kode_kab])
            ->andFilterWhere(['like', 'kode_kec', $this->kode_kec])
            ->andFilterWhere(['like', 'kode_desa', $this->kode_desa])
            ->andFilterWhere(['like', 'kode_bs', $this->kode_bs])
            ->andFilterWhere(['like', 'id_barcode', $this->id_barcode])
            ->andFilterWhere(['like', 'no_hp', $this->no_hp]);

        return $dataProvider;
    }
}
