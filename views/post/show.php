

<h1>Show action</h1>
<div class="container">
    <button class="btn btn-success" id="click">Click me ...</button>
</div>

<?php

foreach ($equip as $key) {
    debug($key['title']);
}
//$this->registerJsFile('@web/js/scripts.js',['depends' => 'yii\web\YiiAsset']);
//$this->registerJs('$(\'.container\').append(`<div>Hello append</div>`);',\yii\web\View::POS_LOAD);
//$this->registerCss('.container-fluid{background:red}');
$script = <<<JS
$('body').on('click','#click',function() {
  $.ajax({
    url: 'index.php?r=post/index',
    data : {test : '123'} ,
    type : 'POST',
    success : function(res) {
      console.log(res)
    },
    error: function() {
      alert('Error');
    }
  });
})
JS;

$this->registerJs($script, \yii\web\View::POS_LOAD);
?>


