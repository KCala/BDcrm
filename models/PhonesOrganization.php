<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "phones_organization".
 *
 * @property integer $phone_organization_id
 * @property string $name
 * @property string $number
 * @property integer $organization_id
 *
 * @property Organizations $organization
 * @property PhonesOrganizationLog[] $phonesOrganizationLogs
 */
class PhonesOrganization extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'phones_organization';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'number'], 'required'],
            [['organization_id'], 'integer'],
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
            'phone_organization_id' => 'Phone Organization ID',
            'name' => 'Name',
            'number' => 'Number',
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
    public function getPhonesOrganizationLogs()
    {
        return $this->hasMany(PhonesOrganizationLog::className(), ['phone_organization_id' => 'phone_organization_id']);
    }
}
