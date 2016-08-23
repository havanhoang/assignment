<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sanpham".
 *
 * @property integer $MaSP
 * @property string $TenSP
 * @property string $SoLuong
 * @property string $MoTa
 * @property string $MaLoaiSP
 */
class Sanpham extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sanpham';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TenSP', 'SoLuong', 'MoTa', 'MaLoaiSP'], 'string', 'max' => 255],
            [['file'],'file','extensions'=>['png','jpg','gif'],
                'maxSize'=>1024*1024*2],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'MaSP' => 'Ma Sp',
            'TenSP' => 'Ten Sp',
            'SoLuong' => 'So Luong',
            'MoTa' => 'Mo Ta',
            'MaLoaiSP' => 'Ma Loai Sp',
        ];
    }
}
