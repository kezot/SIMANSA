
<?php
class LihatStatistikNilaiController extends Controller
{
	public $layout='//layouts/column2';
	
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('TNilaiRaporNilai');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
    }
	
    public function listKelas() {
        $kelas = Kelas::model()->findAll(array('order' => 'KD_TINGKAT_KELAS, KD_PROGRAM_PENGAJARAN, KD_ROMBEL'));
        return $kelas;
    }

    public function listMapel() {
        $mapel = RMataPelajaranDiajarkan::model()->findAll(array('order' => 'ORDER_LIST'));
        return $mapel;
    }
    
    // public function listSemester() {
    //     $mapel = RMataPelajaranDiajarkan::model()->findAll(array('order' => 'ORDER_LIST'));
    //     return $mapel;
    // }

    public function getSiswa($id_kelas, $id_mapel) {
        $kelas = Kelas::model()->findByPk($id_kelas);
        // $mapel = RMataPelajaranDiajarkan::model()->findByPk($id_mapel);
//        echo $kelas->KD_TINGKAT_KELAS . "<br>";
//        echo $kelas->KD_PROGRAM_PENGAJARAN . "<br>";
//        echo $kelas->KD_ROMBEL . "<br>";
//        echo $this->tahunAjaran . "<br>";
        $listNilai = TNilaiRaporNilai::model()->findAllByAttributes(
                array("KD_TINGKAT_KELAS" => $kelas->KD_TINGKAT_KELAS,
                    "KD_PROGRAM_PENGAJARAN" => $kelas->KD_PROGRAM_PENGAJARAN,
                    "KD_ROMBEL" => $kelas->KD_ROMBEL,
                    "KD_TAHUN_AJARAN" =>'15',
                    "KD_MATA_PELAJARAN_DIAJARKAN"=>$id_mapel));

		// $query='SELECT n.NIS, n.NILAI_KOGNITIF from T_Siswa_Tingkat s, T_NILAI_RAPOR_NILAI n where s.NIS=n.NIS AND s.KD_TINGKAT_KELAS=n.KD_TINGKAT_KELAS AND 
		// s.KD_TAHUN_AJARAN=n.KD_TAHUN_AJARAN AND s.KD_PROGRAM_PENGAJARAN=n.KD_PROGRAM_PENGAJARAN AND s.KD_ROMBEL=n.KD_ROMBEL AND n.KD_TAHUN_AJARAN='.$this->tahunAjaran.'AND n.KD_MATA_PELAJARAN_DIAJARKAN='.$id_mapel.'AND n.KD_ROMBEL='.$kelas->KD_ROMBEL.'AND n.KD_PROGRAM_PENGAJARAN='.$kelas->KD_PROGRAM_PENGAJARAN.
		// 'AND n.KD_TINGKAT_KELAS='.$kelas->KD_TINGKAT_KELAS;
		//$query='SELECT n.NIS, n.NILAI_KOGNITIF from T_Siswa_Tingkat s, T_NILAI_RAPOR_NILAI n where s.NIS=n.NIS AND s.KD_TINGKAT_KELAS=n.KD_TINGKAT_KELAS AND 
		//s.KD_TAHUN_AJARAN=n.KD_TAHUN_AJARAN AND s.KD_PROGRAM_PENGAJARAN=n.KD_PROGRAM_PENGAJARAN AND s.KD_ROMBEL=n.KD_ROMBEL AND n.KD_TAHUN_AJARAN=15 AND n.KD_MATA_PELAJARAN_DIAJARKAN=05005 AND n.KD_ROMBEL=1 AND n.KD_PROGRAM_PENGAJARAN=3 AND n.KD_TINGKAT_KELAS=02';
		//$listSiswa = mysql_query($query);

       	return $listNilai;
    }

    public function getNamaSiswa($NIS) {
        $namaSiswa = Siswa::model()->findByPK($NIS);
        return $namaSiswa;
    }

    public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	
	public function actionView($NIS, $KD_TAHUN_AJARAN, $KD_TINGKAT_KELAS, $KD_PROGRAM_PENGAJARAN, $KD_ROMBEL, $KD_KURIKULUM, $KD_PERIODE_BELAJAR, $KD_MATA_PELAJARAN)
	{		
		$model=$this->loadModel($NIS, $KD_TAHUN_AJARAN, $KD_TINGKAT_KELAS, $KD_PROGRAM_PENGAJARAN, $KD_ROMBEL, $KD_KURIKULUM, $KD_PERIODE_BELAJAR, $KD_MATA_PELAJARAN);
		$this->render('view',array('model'=>$model));
	}
	
	public function loadModel($NIS, $KD_TAHUN_AJARAN, $KD_TINGKAT_KELAS, $KD_PROGRAM_PENGAJARAN, $KD_ROMBEL, $KD_KURIKULUM, $KD_PERIODE_BELAJAR, $KD_MATA_PELAJARAN)
	{
		$model=LihatStatistikNilai::model()->findByPk(array('NIS'=>$NIS, 'KD_TAHUN_AJARAN'=>$KD_TAHUN_AJARAN, 'KD_TINGKAT_KELAS'=>$KD_TINGKAT_KELAS, 'KD_PROGRAM_PENGAJARAN'=>$KD_PROGRAM_PENGAJARAN, 'KD_ROMBEL'=>$KD_ROMBEL, 'KD_KURIKULUM'=>$KD_KURIKULUM, 'KD_PERIODE_BELAJAR'=>$KD_PERIODE_BELAJAR, 'KD_MATA_PELAJARAN'=>$KD_MATA_PELAJARAN));
		if($model==null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	public function saveModel($model)
	{
		try
		{
			$model->save();
		}
		catch(Exception $e)
		{
			$this->showError($e);
		}		
	}

	function showError(Exception $e)
	{
		if($e->getCode()==23000)
			$message = "This operation is not permitted due to an existing foreign key reference.";
		else
			$message = "Invalid operation.";
		throw new CHttpException($e->getCode(), $message);
	}		
}
