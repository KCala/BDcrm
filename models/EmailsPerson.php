<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "emails_person".
 *
 * @property integer $email_person_id
 * @property string $name
 * @property string $email
 * @property integer $person_id
 *
 * @property Persons $person
 * @property EmailsPersonLog[] $emailsPersonLogs
 */
class EmailsPerson extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'emails_person';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            [['person_id'], 'integer'],
            [['name', 'email'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'email_person_id' => 'Email Person ID',
            'name' => 'Name',
            'email' => 'Email',
            'person_id' => 'Person ID',
        ];
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
    public function getEmailsPersonLogs()
    {
        return $this->hasMany(EmailsPersonLog::className(), ['email_person_id' => 'email_person_id']);
    }
}
