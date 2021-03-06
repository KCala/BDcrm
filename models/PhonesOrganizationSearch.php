<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PhonesOrganization;

/**
 * PhonesOrganizationSearch represents the model behind the search form about `app\models\PhonesOrganization`.
 */
class PhonesOrganizationSearch extends PhonesOrganization
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['phone_organization_id', 'organization_id'], 'integer'],
            [['name', 'number'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = PhonesOrganization::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'phone_organization_id' => $this->phone_organization_id,
            'organization_id' => $this->organization_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'number', $this->number]);

        return $dataProvider;
    }
}
