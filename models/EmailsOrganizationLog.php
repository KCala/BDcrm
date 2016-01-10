<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "emails_organization_log".
 *
 * @property integer $log_id
 * @property integer $email_organization_id
 * @property integer $user_id
 * @property string $datetime
 * @property string $name
 * @property string $email
 * @property integer $person_id
 *
 * @property EmailsOrganization $emailOrganization
 * @property Users $user
 */
class EmailsOrganizationLog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'emails_organization_log';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email_organization_id', 'user_id', 'datetime', 'name', 'email'], 'required'],
            [['email_organization_id', 'user_id', 'person_id'], 'integer'],
            [['datetime'], 'safe'],
            [['name', 'email'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'log_id' => 'Log ID',
            'email_organization_id' => 'Email Organization ID',
            'user_id' => 'User ID',
            'datetime' => 'Datetime',
            'name' => 'Name',
            'email' => 'Email',
            'person_id' => 'Person ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmailOrganization()
    {
        return $this->hasOne(EmailsOrganization::className(), ['email_organization_id' => 'email_organization_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['user_id' => 'user_id']);
    }
}
