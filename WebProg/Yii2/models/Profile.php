<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profile".
 *
 * @property integer $id
 * @property string $title
 * @property string $slug
 * @property string $text
 * @property string $fullName
 * @property string $nickName
 * @property string $email
 * @property string $address
 * @property string $gender
 * @property string $cellphoneNumber
 * @property string $comments
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
            [['id', 'title', 'slug', 'text', 'fullName', 'nickName', 'email', 'address', 'gender', 'cellphoneNumber'], 'required'],
            [['id', 'cellphoneNumber'], 'integer'],
            [['text', 'nickName', 'gender'], 'string'],
            [['title', 'slug'], 'string', 'max' => 128],
            [['fullName', 'email'], 'string', 'max' => 32],
            [['address'], 'string', 'max' => 64],
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
            'title' => 'Title',
            'slug' => 'Slug',
            'text' => 'Text',
            'fullName' => 'Full Name',
            'nickName' => 'Nick Name',
            'email' => 'Email',
            'address' => 'Address',
            'gender' => 'Gender',
            'cellphoneNumber' => 'Cellphone Number',
            'comments' => 'Comments',
        ];
    }
}
