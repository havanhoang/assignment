<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "chitiethoadon".
 *
 * @property integer $MaSP
 * @property string $MaHD
 * @property string $SLMua
 * @property string $DGBan
 */
class Chitiethoadon extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'chitiethoadon';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MaHD', 'SLMua', 'DGBan'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'MaSP' => 'Ma Sp',
            'MaHD' => 'Ma Hd',
            'SLMua' => 'Slmua',
            'DGBan' => 'Dgban',
        ];
    }
}
