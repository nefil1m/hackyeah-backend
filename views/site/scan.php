<?php

use yii\widgets\ActiveForm;

?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>


    <div class="card" style="">
        <div class="card-body">
            <h5 class="card-title">QR Scanning</h5>
            <p class="card-text">Scan QR code to get user profile</p>
            <input type="file">
            <hr/>
            <button  type="submit" class="btn btn-info btn-fill">Send</button>
        </div>
    </div>

<?php ActiveForm::end() ?>