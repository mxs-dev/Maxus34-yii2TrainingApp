<?php
/**
 * Created by PhpStorm.
 * User: MXS34
 * Date: 18.11.2016
 * Time: 22:04
 */

namespace app\models;
use yii\db\ActiveRecord;

class Category extends ActiveRecord{
    public static function tableName() {
        return 'categories';
    }
}