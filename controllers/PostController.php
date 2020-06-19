<?php


namespace app\controllers;

use app\models\Categorys;
use Yii;
use app\models\TestForm;
class PostController extends AppController
{

    public $layout = 'basic';

    public function beforeAction($action)
    {
        if ($action->id == 'index') {
            $this->enableCsrfValidation = false;
        }
        return parent::beforeAction($action);
    }

    public function actionIndex()
    {

        $this->view->title = "Posts";
        if (Yii::$app->request->isAjax) {
            //$this->debug($_POST);
            //$this->debug(Yii::$app->request->post());
            return 'test';
        }

        $model = new TestForm();
        if ( $model->load(Yii::$app->request->post()) )
        {
            if ($model->validate())
            {
                Yii::$app->session->setFlash('success','Data is inserted');
                return $this->refresh();
            }
            else
            {
                Yii::$app->session->setFlash('error','Data isn\'t insert');
            }
        }

        return $this->render('index',compact('model'));

    }

    public function actionShow()
    {
        $this->view->title = "Post";
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => 'Keys...']);
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'Page`s description...']);
        //  $this->layout = 'basic';
        $equip = Categorys::find()->all();
        return $this->render('show',compact('equip'));

    }

}