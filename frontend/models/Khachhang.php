<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "khachhang".
 *
 * @property integer $MaKH
 * @property string $TenKH
 * @property string $DiaChi
 * @property string $SoDT
 */
class Khachhang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'khachhang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TenKH', 'DiaChi', 'SoDT'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'MaKH' => 'Ma Kh',
            'TenKH' => 'Ten Kh',
            'DiaChi' => 'Dia Chi',
            'SoDT' => 'So Dt',
        ];
    }
}
