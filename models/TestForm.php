<?php


namespace app\models;
use yii\base\Model;

class TestForm extends Model
{

    public $name;
    public $email;
    public $text;


    public function attributeLabels()
    {
        return [
          'name'=>'Your name',
          'email'=>'Your email',
          'text'=>'Text message',
        ];
    }

    public function rules()
    {
        return [
          [['name','email','text'] , 'required'],
          ['email','email'],
          //['name','string', 'min' => 5, 'tooShort' => 'Min count' ],
          //['name','string', 'max' => 10, 'tooLong' => 'Max count' ],
          ['name' , 'string' , 'length' => [2,10]],
          ['name' , 'myRule'],
          [['text','name','email'] , 'trim'],
        ];
    }

    public function  myRule ($attr)
    {
        if (!in_array($this->$attr, ['hello', 'world', 'barev','qwe','qwerty','asd',]))
        {
            $this->addError($attr,'Not needed words in input');
        }
    }

}