<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cyclical_projects".
 *
 * @property integer $cyclical_project_id
 * @property string $name
 * @property string $description
 *
 * @property Projects[] $projects
 */
class CyclicalProjects extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cyclical_projects';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cyclical_project_id' => 'Cyclical Project ID',
            'name' => 'Name',
            'description' => 'Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjects()
    {
        return $this->hasMany(Projects::className(), ['cyclical_project_id' => 'cyclical_project_id']);
    }
}
