<?php

namespace kouosl\grupgruplama\models;

use Yii;

/**
 * This is the model class for table "kayit".
 *
 * @property int $kayitid
 * @property string $ad
 * @property string $soyad
 * @property string $email
 * @property string $numara
 * @property string $grup
 */
class Kayit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kayit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ad', 'soyad', 'email', 'numara', 'grup'], 'required'],
            [['ad', 'soyad', 'numara'], 'string', 'max' => 25],
            [['email'], 'string', 'max' => 255],
            [['grup'], 'string', 'max' => 7],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kayitid' => 'Kayitid',
            'ad' => 'Ad',
            'soyad' => 'Soyad',
            'email' => 'Email',
            'numara' => 'Numara',
            'grup' => 'Grup',
        ];
    }
}
