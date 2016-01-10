<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "persons".
 *
 * @property integer $person_id
 * @property string $firstname
 * @property string $lastname
 * @property integer $organization_id
 * @property string $photo_filepath
 * @property string $created
 * @property string $state
 *
 * @property Contacts[] $contacts
 * @property EmailsPerson[] $emailsPeople
 * @property Organizations $organization
 * @property PersonsLog[] $personsLogs
 * @property PhonesPerson[] $phonesPeople
 */
class Persons extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'persons';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firstname', 'lastname', 'created', 'state'], 'required'],
            [['organization_id'], 'integer'],
            [['created'], 'safe'],
            [['firstname', 'lastname', 'photo_filepath', 'state'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'person_id' => 'Person ID',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'organization_id' => 'Organization ID',
            'photo_filepath' => 'Photo Filepath',
            'created' => 'Created',
            'state' => 'State',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContacts()
    {
        return $this->hasMany(Contacts::className(), ['person_id' => 'person_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmailsPeople()
    {
        return $this->hasMany(EmailsPerson::className(), ['person_id' => 'person_id']);
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
    public function getPersonsLogs()
    {
        return $this->hasMany(PersonsLog::className(), ['person_id' => 'person_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhonesPeople()
    {
        return $this->hasMany(PhonesPerson::className(), ['person_id' => 'person_id']);
    }
}
