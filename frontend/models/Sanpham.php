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
 * @property string $file
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
            [['file'], 'required'],
            [['file'], 'string'],
            [['TenSP', 'SoLuong', 'MoTa', 'MaLoaiSP'], 'string', 'max' => 255],
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
            'file' => 'File',
        ];
    }
}
