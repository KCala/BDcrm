<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "organizations_log".
 *
 * @property integer $log_id
 * @property integer $organization_id
 * @property integer $user_id
 * @property string $datetime
 * @property string $name
 * @property string $address
 * @property string $city
 * @property string $postal_code
 * @property string $website
 * @property string $description
 * @property string $logo_filepath
 * @property string $state
 *
 * @property Organizations $organization
 * @property Users $user
 */
class OrganizationsLog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'organizations_log';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['organization_id', 'user_id', 'datetime', 'name', 'state'], 'required'],
            [['organization_id', 'user_id'], 'integer'],
            [['datetime'], 'safe'],
            [['description'], 'string'],
            [['name', 'address', 'city', 'postal_code', 'website', 'logo_filepath', 'state'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'log_id' => 'Log ID',
            'organization_id' => 'Organization ID',
            'user_id' => 'User ID',
            'datetime' => 'Datetime',
            'name' => 'Name',
            'address' => 'Address',
            'city' => 'City',
            'postal_code' => 'Postal Code',
            'website' => 'Website',
            'description' => 'Description',
            'logo_filepath' => 'Logo Filepath',
            'state' => 'State',
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
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['user_id' => 'user_id']);
    }
}
