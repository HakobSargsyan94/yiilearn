<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<h1>Posts</h1>
<?php

if ( Yii::$app->session->hasFlash('success') ) {
    $res =Yii::$app->session->getFlash('success');
    echo  '<div class="alert alert-success bootAlert" role="alert">'.$res.'
                <button type="button" class="closebut close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                </button>
           </div>';
} else if (Yii::$app->session->hasFlash('error')) {
    $res =Yii::$app->session->getFlash('error');
    echo  '<div class="alert alert-danger bootAlert" role="alert">'.$res.'
                <button type="button" class="closebut close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
           </div>';
}



//debug($model);
echo "<div class='container'>";
$form = ActiveForm::begin(['options'=>['class'=>'form-horizontal','id'=>'testForm']]);
echo $form->field($model,'name');
echo $form->field($model,'email')->input('email');
echo $form->field($model,'text')->textarea(['rows'=>5,'style'=>['max-width'=>'100%','min-width'=>'100%']]);
echo HTML::submitButton('Send',['class'=>'btn btn-success']);

ActiveForm::end();
echo "</div>";

?>

