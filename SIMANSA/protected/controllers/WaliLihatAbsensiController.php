
<?php
class WaliLihatAbsensiController extends Controller
{
	public $layout='//layouts/column2';
        public $id = 'walilihatabsensi';
	
	public function actionIndex()
	{

		$profile = $this->getUser();
        $kelas = Kelas::model()->findByAttributes(array("NIP" => $profile[0]));

		$criteria = new CDbCriteria(array(                    
                'order'=>'NIS desc',
                'condition'=>'KD_TAHUN_AJARAN='.$this->tahunAjaran.' AND KD_TINGKAT_KELAS='.$kelas->KD_TINGKAT_KELAS.' AND KD_ROMBEL='.$kelas->KD_ROMBEL.' AND KD_PROGRAM_PENGAJARAN='.$kelas->KD_PROGRAM_PENGAJARAN,

        ));

		$dataProvider=new CActiveDataProvider('SiswaTingkat', array(
		            'criteria'=>$criteria,
		    ));

		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	public function actionView($NIS, $KD_TAHUN_AJARAN, $KD_ROMBEL, $KD_PROGRAM_PENGAJARAN, $KD_TINGKAT_KELAS)
	{

		$criteria = new CDbCriteria(array(                    
                'order'=>'TANGGAL desc',
                'condition'=>'NIS='.$NIS.' AND KD_TAHUN_AJARAN='.$KD_TAHUN_AJARAN.' AND KD_TINGKAT_KELAS='.$KD_TINGKAT_KELAS.' AND KD_ROMBEL='.$KD_ROMBEL.' AND KD_PROGRAM_PENGAJARAN='.$KD_PROGRAM_PENGAJARAN,

        ));

		$dataProvider=new CActiveDataProvider('TSiswaAbsensi', array(
		            'criteria'=>$criteria,
		    ));

		$this->render('view',array(
			'dataProvider'=>$dataProvider,
		));
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

	
    public function getNamaSiswa($NIS) {
        $namaSiswa = Siswa::model()->findByPK($NIS);
        return $namaSiswa;
    }
	
	public function loadModel($NIS, $KD_TAHUN_AJARAN, $KD_TINGKAT_KELAS, $KD_PROGRAM_PENGAJARAN, $KD_ROMBEL, $TANGGAL)
	{
		$model=TSiswaAbsensi::model()->findByPk(array('NIS'=>$NIS, 'KD_TAHUN_AJARAN'=>$KD_TAHUN_AJARAN, 'KD_TINGKAT_KELAS'=>$KD_TINGKAT_KELAS, 'KD_PROGRAM_PENGAJARAN'=>$KD_PROGRAM_PENGAJARAN, 'KD_ROMBEL'=>$KD_ROMBEL, 'TANGGAL'=>$TANGGAL));
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
