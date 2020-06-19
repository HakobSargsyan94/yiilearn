<?php


namespace app\controllers;

use yii\web\Controller;

class AppController extends Controller
{
    public function debug($arr)
    {
        echo '<div style="position: relative;overflow: hidden">
                <pre style="margin:30px 200px !important;
                border-radius: 5px !important;
                border:  1px solid red !important;
                background-color: rgba(0,0,0,0.87) !important;
                padding: 30px;
                z-index: 10000;
                color: #ffffff;
                box-shadow: 0px 2px 35px 2px rgba(0,0,0,0.61);">'
        ,
        var_dump($arr, true)
        ,
        '</pre>
          </div>';
        die;
    }
}

