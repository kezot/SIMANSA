<?php

class SiswaAbsensiController extends Controller {

    public $layout = '//layouts/column1';
    public $listMurid = array();

    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('SiswaAbsensi');
        $this->render('index', array('dataProvider' => $dataProvider));
    }

    public function actionCrud() {
        $nis = "";
        $tanggal = "";
        if (isset($_GET['siswa']) && isset($_GET['tanggal'])) {
            $nis = $_GET['siswa'];
            $tanggal = $_GET['tanggal'];
        }
        echo $nis;
        echo $tanggal;
        if (isset($_GET['runFunction']) && function_exists($_GET['runFunction']))
            $this->deleteData($nis, $tanggal);
        else
        //echo "Function not found or wrong input";
            $this->render('crud');
    }

//   
//    

    public function actionDelete() {

        $nis = $_GET['nis'];
        $tahunAjaran = $this->tahunAjaran;
        $tingkatKelas = $_GET['tk'];
        $programPengajaran = $_GET['pp'];
        $rombel = $_GET['rom'];
        $tanggal = $_GET['tanggal'];
        $absensi = SiswaAbsensi::model()->findByPk(array("NIS" => $nis, "KD_TAHUN_AJARAN" => $tahunAjaran, "KD_TINGKAT_KELAS" => $tingkatKelas, "KD_PROGRAM_PENGAJARAN" => $programPengajaran, "KD_ROMBEL" => $rombel, "TANGGAL" => $tanggal));
        var_dump($absensi);

        $absensi->delete();
        $this->redirect(array('/siswaAbsensi/crud&siswa=' . $nis));
    }

    public function actionCreate() {
        $NIS;
        $siswaTingkat;
        if (!isset($_POST['SiswaAbsensi'])) {
            $NIS = $_POST['nis'];
            $tahunAjaran = $this->tahunAjaran;
            $siswaTingkat = SiswaTingkat::model()->findByAttributes(array('NIS' => $NIS, 'KD_TAHUN_AJARAN' => $tahunAjaran));
        }

        $model = new SiswaAbsensi;

        if (isset($_POST['ajax']) && $_POST['ajax'] === 'client-account-create-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        if (isset($_POST['SiswaAbsensi'])) {
            //$model->TANGGAL = date('m/d/Y');
            $model->attributes = $_POST['SiswaAbsensi'];
            if ($model->validate()) {
                $lala = strtotime($model->TANGGAL);
                echo var_dump($lala);
                //$model->TANGGAL = date('Y-m-d', strtotime($model->TANGGAL));
                $this->saveModel($model);
                //$model->save();
                $this->redirect(array('crud', 'siswa' => $model->NIS)); //, 'NIS' => $model->NIS, 'KD_TAHUN_AJARAN' => $model->KD_TAHUN_AJARAN, 'KD_TINGKAT_KELAS' => $model->KD_TINGKAT_KELAS, 'KD_PROGRAM_PENGAJARAN' => $model->KD_PROGRAM_PENGAJARAN, 'KD_ROMBEL' => $model->KD_ROMBEL, 'TANGGAL' => $model->TANGGAL));
            }
        }
        $this->renderPartial('create', array('model' => $model, 'siswaTingkat' => $siswaTingkat));
    }

    public function actionUpdate($NIS, $KD_TAHUN_AJARAN, $KD_TINGKAT_KELAS, $KD_PROGRAM_PENGAJARAN, $KD_ROMBEL, $TANGGAL) {
        $model = $this->loadModel($NIS, $KD_TAHUN_AJARAN, $KD_TINGKAT_KELAS, $KD_PROGRAM_PENGAJARAN, $KD_ROMBEL, $TANGGAL);
        //$model = SiswaAbsensi::model()->findByAttributes(array('NIS'=> $NIS, 'KD_TAHUN_AJARAN'=> $KD_TAHUN_AJARAN, 'TANGGAL' => $TANGGAL));
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);
        $siswaTingkat;
        if (!isset($_POST['SiswaAbsensi'])) {
            $tahunAjaran = $this->tahunAjaran;
            $siswaTingkat = SiswaTingkat::model()->findByAttributes(array('NIS' => $NIS, 'KD_TAHUN_AJARAN' => $tahunAjaran));
        }
        
        if (isset($_POST['SiswaAbsensi'])) {
            $model->attributes = $_POST['SiswaAbsensi'];
            $this->saveModel($model);
            $this->redirect(array('view',
                'NIS' => $model->NIS, 'KD_TAHUN_AJARAN' => $model->KD_TAHUN_AJARAN, 'KD_TINGKAT_KELAS' => $model->KD_TINGKAT_KELAS, 'KD_PROGRAM_PENGAJARAN' => $model->KD_PROGRAM_PENGAJARAN, 'KD_ROMBEL' => $model->KD_ROMBEL, 'TANGGAL' => $model->TANGGAL));
        }

        $this->renderPartial('update', array(
            'model' => $model, 'siswaTingkat' => $siswaTingkat
        ));
    }
   
    public function getAbsen($NIS) {
        $siswaTingkat = SiswaTingkat::model()->findByAttributes(array("NIS" => $NIS, "KD_TAHUN_AJARAN" => 19));
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

    public function loadModel($NIS, $KD_TAHUN_AJARAN, $KD_TINGKAT_KELAS, $KD_PROGRAM_PENGAJARAN, $KD_ROMBEL, $TANGGAL) {
        $model = SiswaAbsensi::model()->findByPk(array('NIS' => $NIS, 'KD_TAHUN_AJARAN' => $KD_TAHUN_AJARAN, 'KD_TINGKAT_KELAS' => $KD_TINGKAT_KELAS, 'KD_PROGRAM_PENGAJARAN' => $KD_PROGRAM_PENGAJARAN, 'KD_ROMBEL' => $KD_ROMBEL, 'TANGGAL' => $TANGGAL));
        if ($model == null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    public function saveModel($model) {
        try {
            $model->save();
        } catch (Exception $e) {

            //$this->showError($e);
        }
    }

    function showError(Exception $e) {
        if ($e->getCode() == 23000)
            $message = "This operation is not permitted due to an existing foreign key reference.";
        else
            $message = 'Invalid operation.';
        throw new CHttpException($e->getCode(), $message);
    }

    // if $date = '05/10/2013' (mm-dd-yyyy) e.g.
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
