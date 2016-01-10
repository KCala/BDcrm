<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "emails_person_log".
 *
 * @property integer $log_id
 * @property integer $email_person_id
 * @property integer $user_id
 * @property string $datetime
 * @property string $name
 * @property string $email
 * @property integer $person_id
 *
 * @property EmailsPerson $emailPerson
 * @property Users $user
 */
class EmailsPersonLog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'emails_person_log';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email_person_id', 'user_id', 'datetime', 'name', 'email'], 'required'],
            [['email_person_id', 'user_id', 'person_id'], 'integer'],
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
            'email_person_id' => 'Email Person ID',
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
    public function getEmailPerson()
    {
        return $this->hasOne(EmailsPerson::className(), ['email_person_id' => 'email_person_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['user_id' => 'user_id']);
    }
}
