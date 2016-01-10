<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "planned_contacts".
 *
 * @property integer $planned_contact_id
 * @property integer $user_id
 * @property integer $resulted_from_contact_id
 * @property integer $resulted_in_contact_id
 * @property string $datetime
 * @property string $name
 * @property string $description
 *
 * @property Contacts $resultedFromContact
 * @property Users $user
 * @property Contacts $resultedInContact
 */
class PlannedContacts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'planned_contacts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'datetime', 'name'], 'required'],
            [['user_id', 'resulted_from_contact_id', 'resulted_in_contact_id'], 'integer'],
            [['datetime'], 'safe'],
            [['description'], 'string'],
            [['name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'planned_contact_id' => 'Planned Contact ID',
            'user_id' => 'User ID',
            'resulted_from_contact_id' => 'Resulted From Contact ID',
            'resulted_in_contact_id' => 'Resulted In Contact ID',
            'datetime' => 'Datetime',
            'name' => 'Name',
            'description' => 'Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResultedFromContact()
    {
        return $this->hasOne(Contacts::className(), ['contact_id' => 'resulted_from_contact_id']);
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
    public function getResultedInContact()
    {
        return $this->hasOne(Contacts::className(), ['contact_id' => 'resulted_in_contact_id']);
    }
}
