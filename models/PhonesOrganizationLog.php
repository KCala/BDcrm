<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "phones_organization_log".
 *
 * @property integer $log_id
 * @property integer $phone_organization_id
 * @property integer $user_id
 * @property string $datetime
 * @property string $name
 * @property string $number
 * @property integer $person_id
 *
 * @property PhonesOrganization $phoneOrganization
 * @property Users $user
 */
class PhonesOrganizationLog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'phones_organization_log';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['phone_organization_id', 'user_id', 'datetime', 'name', 'number'], 'required'],
            [['phone_organization_id', 'user_id', 'person_id'], 'integer'],
            [['datetime'], 'safe'],
            [['name'], 'string', 'max' => 255],
            [['number'], 'string', 'max' => 16]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'log_id' => 'Log ID',
            'phone_organization_id' => 'Phone Organization ID',
            'user_id' => 'User ID',
            'datetime' => 'Datetime',
            'name' => 'Name',
            'number' => 'Number',
            'person_id' => 'Person ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhoneOrganization()
    {
        return $this->hasOne(PhonesOrganization::className(), ['phone_organization_id' => 'phone_organization_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['user_id' => 'user_id']);
    }
}
