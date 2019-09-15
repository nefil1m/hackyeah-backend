<?php

use yii\widgets\ActiveForm;

?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <div class="row">
        <h2>Scan QR code to get user profile</h2>
        <div class="clearfix"></div>
    </div>
    <div class="row">
        <?= $form->field($model, 'file')->fileInput(['class' => '']) ?>
        <button class="btn btn-info btn-fill">Send</button>
    </div>
<?php ActiveForm::end() ?>