<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Table;

/**
 * TableSearch represents the model behind the search form of `app\models\Table`.
 */
class TableSearch extends Table
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['da', 'net', 'mb', 'bm', 'nmb', 'aga'], 'integer'],
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
        $query = Table::find();

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
            'da' => $this->da,
            'net' => $this->net,
            'mb' => $this->mb,
            'bm' => $this->bm,
            'nmb' => $this->nmb,
            'aga' => $this->aga,
        ]);

        return $dataProvider;
    }
}
