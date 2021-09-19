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
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <a class="btn btn-primary" href="<?= \yii\helpers\Url::to(['proses']) ?>">Add</a>
    </p>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>NO</th>
                <th>NIP</th>
                <th>NAMA</th>
                <th>JABATAN</th>
                <th>UNITKERJA</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($model as $i=>$data){?>
            <tr>
                <td><?= ($i+1)?></td>
                <td><?= $data->NIP?></td>
                <td><?= $data->NAMA?></td>
                <td><?= $data->JABATAN?></td>
                <td><?= $data->UNITKERJA?></td>
                <td>
                    <a href="<?= \yii\helpers\Url::to(['proses','id'=>$data->NIP]) ?>">Edit</a> | <a href="<?= \yii\helpers\Url::to(['delete','id'=>$data->NIP]) ?>" onclick = "if (! confirm('Do you want deleted data ?')) { return false; }">Delete</a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
</div>
