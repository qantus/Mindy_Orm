<?php

/**
 * All rights reserved.
 *
 * @author Falaleev Maxim
 * @email max@studio107.ru
 * @version 1.0
 * @company Studio107
 * @site http://studio107.ru
 * @date 12/03/15 16:55
 */

namespace Modules\Tests\Models;

use Mindy\Orm\Fields\CharField;
use Mindy\Orm\Fields\ImageField;
use Mindy\Orm\Fields\IntField;
use Mindy\Orm\Model;

class ModelWheel extends Model
{
    const TYPE_STAMP = 1;
    const TYPE_CAST = 2;

    public static function tableName()
    {
        return 'mir_model_wheel';
    }

    public static function getFields()
    {
        return [
            'name' => [
                'class' => CharField::className(),
                'verboseName' => 'Наименование'
            ],
            'upper_name' => [
                'class' => CharField::className(),
                'verboseName' => 'НАИМЕНОВАНИЕ',
                'null' => true
            ],
            'producer_wheel_id' => [
                'class' => IntField::className(),
                'verboseName' => 'Производитель',
            ],
            'type' => [
                'class' => IntField::className(),
                'verboseName' => 'Тип',
                'choices' => [
                    self::TYPE_STAMP => 'Штампованый',
                    self::TYPE_CAST => 'Литой'
                ]
            ],
            'color' => [
                'class' => CharField::className(),
                'verboseName' => 'Цвет',
                'null' => true
            ],
            'image' => [
                'class' => CharField::className(),
                'verboseName' => 'Изображение',
                'null' => true
            ]
        ];
    }
}
