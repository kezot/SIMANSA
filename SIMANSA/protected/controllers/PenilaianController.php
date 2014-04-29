<?php

class PenilaianController extends Controller
{
	    public $layout = '//layouts/column1';
    public $listMurid = array();

    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('SiswaAbsensi');
        $this->render('index', array('dataProvider' => $dataProvider));
    }

    public function actionCrud() {
        $nis="";
        $tanggal="";
        if(isset($_GET['siswa']) && isset($_GET['tanggal'])){
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