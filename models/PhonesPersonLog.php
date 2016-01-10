<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "phones_person_log".
 *
 * @property integer $log_id
 * @property integer $phone_person_id
 * @property integer $user_id
 * @property string $datetime
 * @property string $name
 * @property string $number
 * @property integer $person_id
 *
 * @property PhonesPerson $phonePerson
 * @property Users $user
 */
class PhonesPersonLog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'phones_person_log';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['phone_person_id', 'user_id', 'datetime', 'name', 'number'], 'required'],
            [['phone_person_id', 'user_id', 'person_id'], 'integer'],
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
            'phone_person_id' => 'Phone Person ID',
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
    public function getPhonePerson()
    {
        return $this->hasOne(PhonesPerson::className(), ['phone_person_id' => 'phone_person_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['user_id' => 'user_id']);
    }
}
