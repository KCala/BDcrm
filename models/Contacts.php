<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contacts".
 *
 * @property integer $contact_id
 * @property string $datetime
 * @property integer $user_id
 * @property integer $organization_id
 * @property integer $person_id
 * @property string $topic
 * @property string $notes
 * @property string $result
 * @property string $result_description
 *
 * @property Organizations $organization
 * @property Persons $person
 * @property Users $user
 * @property PlannedContacts[] $plannedContacts
 * @property PlannedContacts[] $plannedContacts0
 */
class Contacts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contacts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['datetime'], 'safe'],
            [['user_id', 'organization_id', 'topic', 'result'], 'required'],
            [['user_id', 'organization_id', 'person_id'], 'integer'],
            [['notes', 'result_description'], 'string'],
            [['topic', 'result'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'contact_id' => 'Contact ID',
            'datetime' => 'Datetime',
            'user_id' => 'User ID',
            'organization_id' => 'Organization ID',
            'person_id' => 'Person ID',
            'topic' => 'Topic',
            'notes' => 'Notes',
            'result' => 'Result',
            'result_description' => 'Result Description',
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
    public function getPerson()
    {
        return $this->hasOne(Persons::className(), ['person_id' => 'person_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlannedContacts()
    {
        return $this->hasMany(PlannedContacts::className(), ['resulted_from_contact_id' => 'contact_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlannedContacts0()
    {
        return $this->hasMany(PlannedContacts::className(), ['resulted_in_contact_id' => 'contact_id']);
    }
}
