<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\OrganizationsLog;

/**
 * OrganizationsLogSearch represents the model behind the search form about `app\models\OrganizationsLog`.
 */
class OrganizationsLogSearch extends OrganizationsLog
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['log_id', 'organization_id', 'user_id'], 'integer'],
            [['datetime', 'name', 'address', 'city', 'postal_code', 'website', 'description', 'logo_filepath', 'state'], 'safe'],
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
        $query = OrganizationsLog::find();

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
            'log_id' => $this->log_id,
            'organization_id' => $this->organization_id,
            'user_id' => $this->user_id,
            'datetime' => $this->datetime,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'postal_code', $this->postal_code])
            ->andFilterWhere(['like', 'website', $this->website])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'logo_filepath', $this->logo_filepath])
            ->andFilterWhere(['like', 'state', $this->state]);

        return $dataProvider;
    }
}
