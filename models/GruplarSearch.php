<?php

namespace kouosl\grupgruplama\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use kouosl\grupgruplama\models\Gruplar;

/**
 * GruplarSearch represents the model behind the search form of `vendor\kouosl\models\Gruplar`.
 */
class GruplarSearch extends Gruplar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['grupid'], 'integer'],
            [['grupadi'], 'safe'],
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
        $query = Gruplar::find();

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
            'grupid' => $this->grupid,
        ]);

        $query->andFilterWhere(['like', 'grupadi', $this->grupadi]);

        return $dataProvider;
    }
}
