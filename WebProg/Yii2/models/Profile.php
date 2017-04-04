<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profile".
 *
 * @property integer $id
 * @property string $fullName
 * @property string $nickName
 * @property string $email
 * @property string $address
 * @property string $gender
 * @property string $cellphoneNumber
 * @property string $comments
 *
 * @property Trivia[] $trivias
 */
class Profile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fullName', 'nickName', 'email', 'gender', 'cellphoneNumber'], 'required'],
            [['cellphoneNumber'], 'integer'],
            [['fullName', 'email'], 'string', 'max' => 32],
            [['nickName'], 'string', 'max' => 16],
            [['address'], 'string', 'max' => 64],
            [['gender'], 'string', 'max' => 6],
            [['comments'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fullName' => 'Full Name',
            'nickName' => 'Nick Name',
            'email' => 'Email',
            'address' => 'Address',
            'gender' => 'Gender',
            'cellphoneNumber' => 'Cellphone Number',
            'comments' => 'Comments',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTrivias()
    {
        return $this->hasMany(Trivia::className(), ['profileId' => 'id']);
    }
}
