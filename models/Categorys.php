<?php


namespace app\models;


use yii\db\ActiveRecord;

class Categorys extends  ActiveRecord
{
    public static function tableName  (){
        return 'category';
    }
}