<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
use yii\captcha\Captcha;

$this->title = 'CRUD PEGAWAI';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-pegawai">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <a class="btn btn-warning" href="<?= \yii\helpers\Url::to(['index']) ?>">Back</a>
    </p>
    <?php $form = ActiveForm::begin(['id' => 'pegawai-form']); ?>

        <?= $form->field($model, 'NIP')->textInput(['autofocus' => true,'required'=>true]) ?>

        <?= $form->field($model, 'NAMA')->textInput(['autofocus' => true,'required'=>true]) ?>

        <?= $form->field($model, 'JABATAN')->textInput(['autofocus' => true,'required'=>true]) ?>

        <?= $form->field($model, 'UNITKERJA')->textInput(['autofocus' => true,'required'=>true]) ?>
       
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'pegawai-button']) ?>
        </div>

    <?php ActiveForm::end(); ?>
</div>
