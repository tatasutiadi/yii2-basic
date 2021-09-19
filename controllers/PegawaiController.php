<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Pegawai;

class PegawaiController extends Controller
{
    public function actionIndex(){
        $model = Pegawai::find()->all();

        return $this->render('index', [
            'model' => $model,
        ]);
    }

    public function actionProses($id = null){
        if(!empty($id)){
            $model = Pegawai::findOne($id);
        }else{
            $model = new Pegawai;
        }

        if($model->load(\Yii::$app->request->post())){
            $input = \Yii::$app->request->post('Pegawai');

            $model->NIP = $input['NIP'];
            $model->NAMA = $input['NAMA'];
            $model->JABATAN = $input['JABATAN'];
            $model->UNITKERJA = $input['UNITKERJA'];

            if($model->save()){
                if($model->isNewRecord){
                    Yii::$app->session->setFlash('success','Success Insert');
                }else{
                    Yii::$app->session->setFlash('success','Success Updated');
                }
                return $this->redirect(['index']);
            }else{
                Yii::$app->session->setFlash('error','Error Insert');
                return $this->redirect(['proses']);
            }
        }

        return $this->render('form', [
            'model' => $model,
        ]);
    }

    public function actionDelete($id){
        $model = Pegawai::findOne($id)->delete();

        if($model){
            Yii::$app->session->setFlash('success','Success Deleted Data');
            return $this->redirect(['index']);
        }else{
            Yii::$app->session->setFlash('error','Error Deleted Data');
            return $this->redirect(['index']);
        }
    }
}