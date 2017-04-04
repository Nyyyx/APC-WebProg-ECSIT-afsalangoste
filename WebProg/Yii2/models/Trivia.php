<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trivia".
 *
 * @property integer $id
 * @property string $question
 * @property string $answer
 * @property integer $profileId
 *
 * @property Profile $profile
 */
class Trivia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trivia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['question', 'answer', 'profileId'], 'required'],
            [['profileId'], 'integer'],
            [['question', 'answer'], 'string', 'max' => 100],
            [['profileId'], 'exist', 'skipOnError' => true, 'targetClass' => Profile::className(), 'targetAttribute' => ['profileId' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'question' => 'Question',
            'answer' => 'Answer',
            'profileId' => 'Profile ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfile()
    {
        return $this->hasOne(Profile::className(), ['id' => 'profileId']);
    }
}
