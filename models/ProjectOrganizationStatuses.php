<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "project_organization_statuses".
 *
 * @property integer $status_id
 * @property integer $project_id
 * @property integer $organization_id
 * @property string $status
 * @property string $description
 *
 * @property Organizations $organization
 * @property Projects $project
 */
class ProjectOrganizationStatuses extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'project_organization_statuses';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['project_id', 'organization_id', 'status'], 'required'],
            [['project_id', 'organization_id'], 'integer'],
            [['description'], 'string'],
            [['status'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'status_id' => 'Status ID',
            'project_id' => 'Project ID',
            'organization_id' => 'Organization ID',
            'status' => 'Status',
            'description' => 'Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrganization()
    {
        return $this->hasOne(Organizations::className(), ['organization_id' => 'organization_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProject()
    {
        return $this->hasOne(Projects::className(), ['project_id' => 'project_id']);
    }
}
