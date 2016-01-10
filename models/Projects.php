<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "projects".
 *
 * @property integer $project_id
 * @property string $name
 * @property string $description
 * @property string $final_datetime
 * @property integer $cyclical_project_id
 * @property string $logo_filepath
 *
 * @property ProjectOrganizationStatuses[] $projectOrganizationStatuses
 * @property CyclicalProjects $cyclicalProject
 * @property UserProjectAssignements[] $userProjectAssignements
 */
class Projects extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'projects';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['description'], 'string'],
            [['final_datetime'], 'safe'],
            [['cyclical_project_id'], 'integer'],
            [['name', 'logo_filepath'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'project_id' => 'Project ID',
            'name' => 'Name',
            'description' => 'Description',
            'final_datetime' => 'Final Datetime',
            'cyclical_project_id' => 'Cyclical Project ID',
            'logo_filepath' => 'Logo Filepath',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjectOrganizationStatuses()
    {
        return $this->hasMany(ProjectOrganizationStatuses::className(), ['project_id' => 'project_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCyclicalProject()
    {
        return $this->hasOne(CyclicalProjects::className(), ['cyclical_project_id' => 'cyclical_project_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserProjectAssignements()
    {
        return $this->hasMany(UserProjectAssignements::className(), ['project_id' => 'project_id']);
    }
}
