<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "phones_person".
 *
 * @property integer $phone_person_id
 * @property string $name
 * @property string $number
 * @property integer $person_id
 *
 * @property Persons $person
 * @property PhonesPersonLog[] $phonesPersonLogs
 */
class PhonesPerson extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'phones_person';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'number'], 'required'],
            [['person_id'], 'integer'],
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
            'phone_person_id' => 'Phone Person ID',
            'name' => 'Name',
            'number' => 'Number',
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
    public function getPhonesPersonLogs()
    {
        return $this->hasMany(PhonesPersonLog::className(), ['phone_person_id' => 'phone_person_id']);
    }
}
