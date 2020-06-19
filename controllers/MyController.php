<?php


namespace app\controllers;



class MyController extends AppController
{

    public function actionIndex ($id = null ) {
        if (!$id )  $id = 'test';
        $hi = 'Hello wolrd in index';
        $names = ['Hakob','Artur','Mish','Gor'];
        // return $this->render('index',['helloInIndex'=> $hi,'names'=>$names]);
        return $this->render('index',compact('id','hi','names'));
    }

}