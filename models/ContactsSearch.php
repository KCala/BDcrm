<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Contacts;

/**
 * ContactsSearch represents the model behind the search form about `app\models\Contacts`.
 */
class ContactsSearch extends Contacts
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['contact_id', 'user_id', 'organization_id', 'person_id'], 'integer'],
            [['datetime', 'topic', 'notes', 'result', 'result_description'], 'safe'],
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
        $query = Contacts::find();

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
            'contact_id' => $this->contact_id,
            'datetime' => $this->datetime,
            'user_id' => $this->user_id,
            'organization_id' => $this->organization_id,
            'person_id' => $this->person_id,
        ]);

        $query->andFilterWhere(['like', 'topic', $this->topic])
            ->andFilterWhere(['like', 'notes', $this->notes])
            ->andFilterWhere(['like', 'result', $this->result])
            ->andFilterWhere(['like', 'result_description', $this->result_description]);

        return $dataProvider;
    }
}
