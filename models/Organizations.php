<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "organizations".
 *
 * @property integer $organization_id
 * @property string $name
 * @property string $address
 * @property string $city
 * @property string $postal_code
 * @property string $website
 * @property string $description
 * @property string $logo_filepath
 * @property string $state
 *
 * @property Contacts[] $contacts
 * @property EmailsOrganization[] $emailsOrganizations
 * @property OrganizationsLog[] $organizationsLogs
 * @property Persons[] $persons
 * @property PhonesOrganization[] $phonesOrganizations
 * @property ProjectOrganizationStatuses[] $projectOrganizationStatuses
 */
class Organizations extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'organizations';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'state'], 'required'],
            [['description'], 'string'],
            [['name', 'address', 'city', 'postal_code', 'website', 'logo_filepath', 'state'], 'string', 'max' => 255],
            [['name'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'organization_id' => 'Organization ID',
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
    public function getContacts()
    {
        return $this->hasMany(Contacts::className(), ['organization_id' => 'organization_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmailsOrganizations()
    {
        return $this->hasMany(EmailsOrganization::className(), ['organization_id' => 'organization_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrganizationsLogs()
    {
        return $this->hasMany(OrganizationsLog::className(), ['organization_id' => 'organization_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersons()
    {
        return $this->hasMany(Persons::className(), ['organization_id' => 'organization_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhonesOrganizations()
    {
        return $this->hasMany(PhonesOrganization::className(), ['organization_id' => 'organization_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjectOrganizationStatuses()
    {
        return $this->hasMany(ProjectOrganizationStatuses::className(), ['organization_id' => 'organization_id']);
    }
}
