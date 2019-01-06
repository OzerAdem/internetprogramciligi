<?php

namespace kouosl\grupgruplama\models;


use Yii;

/**
 * This is the model class for table "gruplar".
 *
 * @property int $grupid
 * @property string $grupadi
 */
class Gruplar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gruplar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['grupadi'], 'required'],
            [['grupadi'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'grupid' => 'Grupid',
            'grupadi' => 'Grupadi',
        ];
    }
}
