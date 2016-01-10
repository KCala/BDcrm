<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PhonesOrganizationLog;

/**
 * PhonesOrganizationLogSearch represents the model behind the search form about `app\models\PhonesOrganizationLog`.
 */
class PhonesOrganizationLogSearch extends PhonesOrganizationLog
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['log_id', 'phone_organization_id', 'user_id', 'person_id'], 'integer'],
            [['datetime', 'name', 'number'], 'safe'],
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
        $query = PhonesOrganizationLog::find();

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
            'phone_organization_id' => $this->phone_organization_id,
            'user_id' => $this->user_id,
            'datetime' => $this->datetime,
            'person_id' => $this->person_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'number', $this->number]);

        return $dataProvider;
    }
}
