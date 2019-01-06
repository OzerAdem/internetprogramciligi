<?php

namespace kouosl\grupgruplama\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use kouosl\grupgruplama\models\Kayit;

/**
 * KayitSearch represents the model behind the search form of `vendor\kouosl\models\Kayit`.
 */
class KayitSearch extends Kayit
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kayitid'], 'integer'],
            [['ad', 'soyad', 'email', 'numara', 'grup'], 'safe'],
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
        $query = Kayit::find();

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
            'kayitid' => $this->kayitid,
        ]);

        $query->andFilterWhere(['like', 'ad', $this->ad])
            ->andFilterWhere(['like', 'soyad', $this->soyad])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'numara', $this->numara])
            ->andFilterWhere(['like', 'grup', $this->grup]);

        return $dataProvider;
    }
}
