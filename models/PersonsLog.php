<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "persons_log".
 *
 * @property integer $log_id
 * @property integer $person_id
 * @property integer $user_id
 * @property string $datetime
 * @property string $firstname
 * @property string $lastname
 * @property string $photo_filepath
 * @property string $created
 * @property string $state
 *
 * @property Persons $person
 * @property Users $user
 */
class PersonsLog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'persons_log';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['person_id', 'user_id', 'datetime', 'firstname', 'lastname', 'created', 'state'], 'required'],
            [['person_id', 'user_id'], 'integer'],
            [['datetime', 'created'], 'safe'],
            [['firstname', 'lastname', 'photo_filepath', 'state'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'log_id' => 'Log ID',
            'person_id' => 'Person ID',
            'user_id' => 'User ID',
            'datetime' => 'Datetime',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'photo_filepath' => 'Photo Filepath',
            'created' => 'Created',
            'state' => 'State',
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
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['user_id' => 'user_id']);
    }
}
