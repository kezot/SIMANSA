<?php

class TSiswaBayarController extends Controller {

    public $layout = '//layouts/column2';
    public $listMurid = array();

    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('TSiswaBayar');
        $this->render('index', array('dataProvider' => $dataProvider));
    }

    public function actionCrud() {
        $nis="";
        $tanggal="";
        $tingkatKelas="";
        $programAjar="";
        $kodeRombel="";
        $tahunAjaran = $this->tahunAjaran;
        $nomorPengguna = $this->getUser();
        $namaPengguna = $this->getUser();
        if(isset($_GET['siswa']) && isset($_GET['tanggal'])&&isset($_GET['tingkatKelas'])&&isset($_GET['programAjar'])&&isset($_GET['kodeRombel'])){
            $nis = $_GET['siswa'];
            $tanggal = $_GET['tanggal'];
            $tingkatKelas = $_GET['tingkatKelas'];
            $programAjar = $_GET['programAjar'];
            $kodeRombel = $_GET['kodeRombel'];

        }
        echo $nis;
        echo $tanggal;
        $model=new TSiswaBayar('search');
         $model->unsetAttributes();  // clear any default values
         if(isset($_GET['TSiswaBayar']))
             $model->attributes=$_GET['TSiswaBayar'];

        if (isset($_GET['runFunction']) && function_exists($_GET['runFunction']))
            $this->deleteData($nis, $tanggal);
        else
            //echo "Function not found or wrong input";
        $this->render('crud',array('model'=>$model));
    }
    
    public function actionCreate(){
        $bayar = new TSiswaBayar;
        $bayar->NIS = $_POST['inputNIS'];
        $bayar->KD_TAHUN_AJARAN = $_POST['inputTahunAjaran'];
        $bayar->KD_TINGKAT_KELAS = $_POST['inputTingkatKelas'];
        $bayar->KD_PROGRAM_PENGAJARAN = $_POST['inputProgramPengajaran'];
        $bayar->KD_ROMBEL = $_POST['inputRombel'];
        $bayar->TANGGAL_BAYAR = $_POST['inputTanggal'];
        $bayar->ID_PEMBAYARAN_SISWA = $_POST['inputID'];
        $bayar->JUMLAH_BAYAR = $_POST['inputJumlah'];
        $bayar->KETERANGAN = $_POST['inputKeterangan'];
        $bayar->USERNAME = 'adm';
        $bayar->save();
        
        //$this->render("create");
        $this->redirect(array('/TSiswaBayar/crud&siswa='.$bayar->NIS));
        
        
    }
    
    public function actionDelete(){
        
        $nis = $_GET['NIS'];
        $tahunAjaran = $this->tahunAjaran;
        $tingkatKelas = $_GET['KD_TINGKAT_KELAS'];
        $programPengajaran = $_GET['KD_PROGRAM_PENGAJARAN'];
        $rombel = $_GET['KD_ROMBEL'];
        $idBayar = $_GET['ID_PEMBAYARAN_SISWA'];
        $tanggal = $_GET['TANGGAL_BAYAR'];
        $bayar = TSiswaBayar::model()->findByPk(array("NIS" => $nis, "KD_TAHUN_AJARAN"=> $tahunAjaran, "KD_TINGKAT_KELAS"=> $tingkatKelas, "KD_PROGRAM_PENGAJARAN" => $programPengajaran, "KD_ROMBEL"=> $rombel, "ID_PEMBAYARAN_SISWA"=>$idBayar, "TANGGAL_BAYAR"=> $tanggal ));
        var_dump($bayar);
        
        $bayar->delete();
        $this->redirect(array('TSiswaBayar/crud&siswa='.$nis));
    }

    public function deleteData($NIS, $tanggal) {
        $siswaTingkat = SiswaTingkat::model()->findByAttributes(array("NIS" => $NIS));
        $tahunAjaran = $siswaTingkat->KD_TAHUN_AJARAN;
        $kodeTingkatKelas = $siswaTingkat->KD_TINGKAT_KELAS;
        $kodeProgramPengajaran = $siswaTingkat->KD_PROGRAM_PENGAJARAN;
        $kodeRombel = $siswaTingkat->KD_ROMBEL;

        $sbsen = SiswaAbsensi::model()->deleteByPk(
                array("KD_TINGKAT_KELAS" => $kodeTingkatKelas,
            "KD_PROGRAM_PENGAJARAN" => $kodeProgramPengajaran,
            "KD_ROMBEL" => $kodeRombel,
            "KD_TAHUN_AJARAN" => $tahunAjaran,
            "NIS"=>$NIS,
            "TANGGAL"=>$tanggal), array('order' => 'TANGGAL DESC'));
    }

    public function updateData($primaryKey) {
        
    }

    public function getBayar($NIS) {
        $siswaTingkat = SiswaTingkat::model()->findByAttributes(array("NIS" => $NIS, "KD_TAHUN_AJARAN" =>19) );
        $tahunAjaran = $siswaTingkat->KD_TAHUN_AJARAN;
        $kodeTingkatKelas = $siswaTingkat->KD_TINGKAT_KELAS;
        $kodeProgramPengajaran = $siswaTingkat->KD_PROGRAM_PENGAJARAN;
        $kodeRombel = $siswaTingkat->KD_ROMBEL;

        $listBayar = TSiswaBayar::model()->findAllByAttributes(
                array("KD_TINGKAT_KELAS" => $kodeTingkatKelas,
            "KD_PROGRAM_PENGAJARAN" => $kodeProgramPengajaran,
            "KD_ROMBEL" => $kodeRombel,
            "KD_TAHUN_AJARAN" => $tahunAjaran), array('order' => 'TANGGAL_BAYAR DESC'));
        return $listBayar;
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
        // $listSiswa = array();
        // for ($index = 0; $index < count($listMurid); $index++) {
        //     $listSiswa[$index] = Siswa::model()->findByPk($listMurid[$index]->NIS);
        // }
         $arr = array();
         for ($index = 0; $index < count($listMurid); $index++) {
             $arr[$index] = $listMurid[$index]->NIS;
         }

         $criteria = new CDbCriteria();
        //$criteria->select='Nilai_Kognitif';
        $criteria->addInCondition("NIS", $arr);
        $listSiswa=  Siswa::model()->findAll($criteria);

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
