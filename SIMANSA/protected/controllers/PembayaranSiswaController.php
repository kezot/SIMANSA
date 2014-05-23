<?php

class PembayaranSiswaController extends Controller {

    public $layout = '//layouts/column1';
    public $listMurid = array();

    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('SiswaAbsensi');
        $this->render('index', array('dataProvider' => $dataProvider));
    }

    public function actionCrud() {

        $this->render('crud');
    }

    public function getAbsen($NIS) {
        $siswaTingkat = SiswaTingkat::model()->findByAttributes(array("NIS" => $NIS));
        $tahunAjaran = $siswaTingkat->KD_TAHUN_AJARAN;
        $kodeTingkatKelas = $siswaTingkat->KD_TINGKAT_KELAS;
        $kodeProgramPengajaran = $siswaTingkat->KD_PROGRAM_PENGAJARAN;
        $kodeRombel = $siswaTingkat->KD_ROMBEL;

        $listAbsen = SiswaAbsensi::model()->findAllByAttributes(
                array("KD_TINGKAT_KELAS" => $kodeTingkatKelas,
            "KD_PROGRAM_PENGAJARAN" => $kodeProgramPengajaran,
            "KD_ROMBEL" => $kodeRombel,
            "KD_TAHUN_AJARAN" => $tahunAjaran), array('order' => 'TANGGAL DESC'));
        return $listAbsen;
    }

    public function getPembayaran($NIS) {
        $siswaTingkat = SiswaTingkat::model()->findByAttributes(array("NIS" => $NIS));
        $tahunAjaran = $siswaTingkat->KD_TAHUN_AJARAN;
        $kodeTingkatKelas = $siswaTingkat->KD_TINGKAT_KELAS;
        $kodeProgramPengajaran = $siswaTingkat->KD_PROGRAM_PENGAJARAN;
        $kodeRombel = $siswaTingkat->KD_ROMBEL;

        $listPembayaran = SiswaBayar::model()->findAllByAttributes(
                array("NIS" => $NIS,
            "KD_TINGKAT_KELAS" => $kodeTingkatKelas,
            "KD_PROGRAM_PENGAJARAN" => $kodeProgramPengajaran,
            "KD_ROMBEL" => $kodeRombel,
            "KD_TAHUN_AJARAN" => $tahunAjaran), array('order' => 'TANGGAL_BAYAR DESC'));
        return $listPembayaran;
    }

    public function listKelas() {
        $kelas = Kelas::model()->findAll(array('order' => 'KD_TINGKAT_KELAS, KD_PROGRAM_PENGAJARAN, KD_ROMBEL'));
        return $kelas;
    }

    public function getKelas($id_kelas) {
        $kelas = Kelas::model()->findByPk($id_kelas);
//        echo $kelas->KD_TINGKAT_KELAS . "<br>";
//        echo $kelas->KD_PROGRAM_PENGAJARAN . "<br>";
//        echo $kelas->KD_ROMBEL . "<br>";
//        echo $this->tahunAjaran . "<br>";
        $listMurid = SiswaTingkat::model()->findAllByAttributes(
                array("KD_TINGKAT_KELAS" => $kelas->KD_TINGKAT_KELAS,
                    "KD_PROGRAM_PENGAJARAN" => $kelas->KD_PROGRAM_PENGAJARAN,
                    "KD_ROMBEL" => $kelas->KD_ROMBEL,
                    "KD_TAHUN_AJARAN" => $this->tahunAjaran));
        $listSiswa = array();
        for ($index = 0; $index < count($listMurid); $index++) {
            $listSiswa[$index] = Siswa::model()->findByPk($listMurid[$index]->NIS);
        }
        //var_dump($listSiswa);
//        $namaSiswa = array();
//        foreach ($listSiswa as $key => $row) {
//            $namaSiswa[$key] = $row['NM_SISWA'];
//        }
        //var_dump($namaSiswa);
        //array_multisort($namaSiswa, 'SORT_ASC', $listSiswa);


        return $listSiswa;
    }

    public function getNamaSiswa($NIS) {
        $namaSiswa = Siswa::model()->findByPK($NIS);
        return $namaSiswa;
    }

    public function actionCreate() {
        $model = new SiswaBayar;

        $NIS;
        $siswaTingkat;
        if (!isset($_POST['SiswaBayar'])) {
            $NIS = $_GET['nis'];
            $tahunAjaran = $this->tahunAjaran;
            $siswaTingkat = SiswaTingkat::model()->findByAttributes(array('NIS' => $NIS, 'KD_TAHUN_AJARAN' => $tahunAjaran));
        }

        if (isset($_POST['ajax']) && $_POST['ajax'] === 'client-account-create-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        if (isset($_POST['SiswaBayar'])) {
            $model->attributes = $_POST['SiswaBayar'];
            $siswaTingkat = SiswaTingkat::model()->findByAttributes(array('NIS' => $model->NIS, 'KD_TAHUN_AJARAN' => $model->KD_TAHUN_AJARAN));
            if ($model->validate()) {
                $this->saveModel($model);
                $this->redirect(array('crud', 'siswa' => $model->NIS)); //'NIS' => $model->NIS, 'KD_TAHUN_AJARAN' => $model->KD_TAHUN_AJARAN, 'KD_TINGKAT_KELAS' => $model->KD_TINGKAT_KELAS, 'KD_PROGRAM_PENGAJARAN' => $model->KD_PROGRAM_PENGAJARAN, 'KD_ROMBEL' => $model->KD_ROMBEL, 'ID_PEMBAYARAN_SISWA' => $model->ID_PEMBAYARAN_SISWA, 'TANGGAL_BAYAR' => $model->TANGGAL_BAYAR));
            }
        }
        $this->renderPartial('create', array('model' => $model, 'siswaTingkat' => $siswaTingkat));
    }

    public function actionDelete($NIS, $KD_TAHUN_AJARAN, $KD_TINGKAT_KELAS, $KD_PROGRAM_PENGAJARAN, $KD_ROMBEL, $ID_PEMBAYARAN_SISWA, $TANGGAL_BAYAR) {
        echo "lalalal";
        echo 'masuk qaqa';
        // we only allow deletion via POST request
        $this->loadModel($NIS, $KD_TAHUN_AJARAN, $KD_TINGKAT_KELAS, $KD_PROGRAM_PENGAJARAN, $KD_ROMBEL, $ID_PEMBAYARAN_SISWA, $TANGGAL_BAYAR)->delete();
        $this->render('crud', array('siswa' => $NIS));

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        //if (!isset($_GET['ajax']))
        //    $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
        //throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    public function actionUpdate($NIS, $KD_TAHUN_AJARAN, $KD_TINGKAT_KELAS, $KD_PROGRAM_PENGAJARAN, $KD_ROMBEL, $ID_PEMBAYARAN_SISWA, $TANGGAL_BAYAR) {
        //$model = SiswaBayar::model()->findByPk(array('NIS' => $NIS, 'KD_TAHUN_AJARAN' => $KD_TAHUN_AJARAN, 'KD_TINGKAT_KELAS' => $KD_TINGKAT_KELAS, 'KD_PROGRAM_PENGAJARAN' => $KD_PROGRAM_PENGAJARAN, 'KD_ROMBEL' => $KD_ROMBEL, 'ID_PEMBAYARAN_SISWA' => $ID_PEMBAYARAN_SISWA, 'TANGGAL_BAYAR' => $TANGGAL_BAYAR));
        $model = $this->loadModel($NIS, $KD_TAHUN_AJARAN, $KD_TINGKAT_KELAS, $KD_PROGRAM_PENGAJARAN, $KD_ROMBEL, $ID_PEMBAYARAN_SISWA, $TANGGAL_BAYAR);
        //var_dump($model);
        //return;
        $siswaTingkat = SiswaTingkat::model()->findByAttributes(array('NIS' => $NIS, 'KD_TAHUN_AJARAN' => $KD_TAHUN_AJARAN));


        // Uncomment the following line if AJAX validation is needed
        //$this->performAjaxValidation($model);

        if (isset($_POST['SiswaBayar'])) {
            $model->attributes = $_POST['SiswaBayar'];
            $this->saveModel($model);
            $this->redirect(array('crud', 'siswa' => $NIS));
            //'NIS' => $model->NIS, 'KD_TAHUN_AJARAN' => $model->KD_TAHUN_AJARAN, 'KD_TINGKAT_KELAS' => $model->KD_TINGKAT_KELAS, 'KD_PROGRAM_PENGAJARAN' => $model->KD_PROGRAM_PENGAJARAN, 'KD_ROMBEL' => $model->KD_ROMBEL, 'ID_PEMBAYARAN_SISWA' => $model->ID_PEMBAYARAN_SISWA, 'TANGGAL_BAYAR' => $model->TANGGAL_BAYAR));
        }



        $this->renderPartial('update', array(
            'model' => $model, 'siswaTingkat' => $siswaTingkat
        ));
    }

    public function actionAdmin() {
        $model = new SiswaBayar('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['SiswaBayar']))
            $model->attributes = $_GET['SiswaBayar'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    public function actionView($NIS, $KD_TAHUN_AJARAN, $KD_TINGKAT_KELAS, $KD_PROGRAM_PENGAJARAN, $KD_ROMBEL, $ID_PEMBAYARAN_SISWA, $TANGGAL_BAYAR) {
        $model = $this->loadModel($NIS, $KD_TAHUN_AJARAN, $KD_TINGKAT_KELAS, $KD_PROGRAM_PENGAJARAN, $KD_ROMBEL, $ID_PEMBAYARAN_SISWA, $TANGGAL_BAYAR);
        $this->render('view', array('model' => $model));
    }

    public function loadModel($NIS, $KD_TAHUN_AJARAN, $KD_TINGKAT_KELAS, $KD_PROGRAM_PENGAJARAN, $KD_ROMBEL, $ID_PEMBAYARAN_SISWA, $TANGGAL_BAYAR) {
        $model = SiswaBayar::model()->findByPk(array('NIS' => $NIS, 'KD_TAHUN_AJARAN' => $KD_TAHUN_AJARAN, 'KD_TINGKAT_KELAS' => $KD_TINGKAT_KELAS, 'KD_PROGRAM_PENGAJARAN' => $KD_PROGRAM_PENGAJARAN, 'KD_ROMBEL' => $KD_ROMBEL, 'ID_PEMBAYARAN_SISWA' => $ID_PEMBAYARAN_SISWA, 'TANGGAL_BAYAR' => $TANGGAL_BAYAR));
        //if ($model == null)
        //    throw new CHttpException(404, 'The requested data does not exist.');
        return $model;
    }

    public function saveModel($model) {
        try {
            $model->save();
        } catch (Exception $e) {
            $this->showError($e);
        }
    }

    function showError(Exception $e) {
        if ($e->getCode() == 23000)
            $message = "This operation is not permitted due to an existing foreign key reference.";
        else
            $message = "Invalid operation.";
        throw new CHttpException($e->getCode(), $message);
    }

    // Uncomment the following methods and override them if needed
    /*
      public function filters()
      {
      // return the filter configuration for this controller, e.g.:
      return array(
      'inlineFilterName',
      array(
      'class'=>'path.to.FilterClass',
      'propertyName'=>'propertyValue',
      ),
      );
      }

      public function actions()
      {
      // return external action classes, e.g.:
      return array(
      'action1'=>'path.to.ActionClass',
      'action2'=>array(
      'class'=>'path.to.AnotherActionClass',
      'propertyName'=>'propertyValue',
      ),
      );
      }
      // Uncomment the following methods and override them if needed
      /*
      public function filters()
      {
      // return the filter configuration for this controller, e.g.:
      return array(
      'inlineFilterName',
      array(
      'class'=>'path.to.FilterClass',
      'propertyName'=>'propertyValue',
      ),
      );
      }

      public function actions()
      {
      // return external action classes, e.g.:
      return array(
      'action1'=>'path.to.ActionClass',
      'action2'=>array(
      'class'=>'path.to.AnotherActionClass',
      'propertyName'=>'propertyValue',
      ),
      );
      }
     */
}
