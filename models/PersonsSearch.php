<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Persons;

/**
 * PersonsSearch represents the model behind the search form about `app\models\Persons`.
 */
class PersonsSearch extends Persons
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['person_id', 'organization_id'], 'integer'],
            [['firstname', 'lastname', 'photo_filepath', 'created', 'state'], 'safe'],
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
        $query = Persons::find();

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
            'person_id' => $this->person_id,
            'organization_id' => $this->organization_id,
            'created' => $this->created,
        ]);

        $query->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'photo_filepath', $this->photo_filepath])
            ->andFilterWhere(['like', 'state', $this->state]);

        return $dataProvider;
    }
}
