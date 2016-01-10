<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "emails_organization".
 *
 * @property integer $email_organization_id
 * @property string $name
 * @property string $email
 * @property integer $organization_id
 *
 * @property Organizations $organization
 * @property EmailsOrganizationLog[] $emailsOrganizationLogs
 */
class EmailsOrganization extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'emails_organization';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            [['organization_id'], 'integer'],
            [['name', 'email'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'email_organization_id' => 'Email Organization ID',
            'name' => 'Name',
            'email' => 'Email',
            'organization_id' => 'Organization ID',
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
    public function getEmailsOrganizationLogs()
    {
        return $this->hasMany(EmailsOrganizationLog::className(), ['email_organization_id' => 'email_organization_id']);
    }
}
