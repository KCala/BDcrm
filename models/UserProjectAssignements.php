<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_project_assignements".
 *
 * @property integer $assignement_id
 * @property integer $user_id
 * @property integer $project_id
 *
 * @property Projects $project
 * @property Users $user
 */
class UserProjectAssignements extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_project_assignements';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'project_id'], 'required'],
            [['user_id', 'project_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'assignement_id' => 'Assignement ID',
            'user_id' => 'User ID',
            'project_id' => 'Project ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProject()
    {
        return $this->hasOne(Projects::className(), ['project_id' => 'project_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['user_id' => 'user_id']);
    }
}
