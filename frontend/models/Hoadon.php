<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hoadon".
 *
 * @property integer $MaHD
 * @property string $NgayLap
 * @property string $MaKH
 */
class Hoadon extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hoadon';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NgayLap', 'MaKH'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'MaHD' => 'Ma Hd',
            'NgayLap' => 'Ngay Lap',
            'MaKH' => 'Ma Kh',
        ];
    }
}
