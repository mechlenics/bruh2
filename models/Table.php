<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "table".
 *
 * @property int $da
 * @property int $net
 * @property int $mb
 * @property int $bm
 * @property int $nmb
 * @property int $aga
 */
class Table extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'table';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['da', 'net', 'mb', 'bm', 'nmb', 'aga'], 'required'],
            [['da', 'net', 'mb', 'bm', 'nmb', 'aga'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'da' => 'Da',
            'net' => 'Net',
            'mb' => 'Mb',
            'bm' => 'Bm',
            'nmb' => 'Nmb',
            'aga' => 'Aga',
        ];
    }
}
