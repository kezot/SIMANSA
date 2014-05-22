<?php
class LihatNilaiController extends Controller
{
	public $layout='//layouts/column2';
	
        public function actionIndex() {
            $dataProvider = new CActiveDataProvider('TNilaiRaporNilai');
            $this->render('index', array(
                'dataProvider' => $dataProvider,)
            );
//            $this->renderPartial('/lihatNilai/tabNilaiRaporNilai', array(
//                'dataProvider' => $dataProvider,)
//                );
        }

        public function actionViewNilai() {
        	$semester = $_POST['selectRapor'];
        	$tingkatKelas = substr($semester,0,2);
        	$periodeBelajar = substr($semester,2);

            $profile = $this->getUser();
        	$siswaTingkat = TNilaiRapor::model()->findByAttributes(array("NIS" => $profile[0], "KD_TINGKAT_KELAS" => $tingkatKelas, "KD_PERIODE_BELAJAR" => $periodeBelajar));

	         $this->render('index', array(
	               'siswaTingkat' => $siswaTingkat,)
	               );
	        }
        
        public function listRapor() {
        	$profile = $this->getUser();
	        $rapor = TNilaiRapor::model()->findAllByAttributes(array("NIS" => $profile[0]));
	        return $rapor;
	    }

        public function actionNilai($NIS, $KD_TINGKAT_KELAS, $KD_PERIODE_BELAJAR) {
        	$profile = $this->getUser();
        	$siswaTingkat = SiswaTingkat::model()->findByAttributes(array("NIS" => $profile[0], "KD_TAHUN_AJARAN" => $this->tahunAjaran));
        	
        	$criteria = new CDbCriteria(array(                    
                'order'=>'KD_TINGKAT_KELAS, KD_PERIODE_BELAJAR desc',
                //'condition'=>'NIS='.$siswaTingkat->NIS.' AND KD_TAHUN_AJARAN='.$siswaTingkat->KD_TAHUN_AJARAN.' AND KD_TINGKAT_KELAS='.$siswaTingkat->KD_TINGKAT_KELAS.' AND KD_ROMBEL='.$siswaTingkat->KD_ROMBEL.' AND KD_PROGRAM_PENGAJARAN='.$siswaTingkat->KD_PROGRAM_PENGAJARAN,
                'condition'=>'NIS='.$profile[0].' AND KD_TINGKAT_KELAS='.$KD_TINGKAT_KELAS.' AND KD_PERIODE_BELAJAR='.$KD_PERIODE_BELAJAR,

        	));

			$dataProvider=new CActiveDataProvider('TNilaiRaporNilai', array(
		            'criteria'=>$criteria,
		    ));

            $params = array(
                'dataProvider' => $dataProvider,
            );
        $this->renderPartial('/lihatNilai/tabNilaiRaporNilai', $params, false, true);
    }
    
    public function actionEkstra($NIS, $KD_TINGKAT_KELAS, $KD_PERIODE_BELAJAR) {
        $profile = $this->getUser();
    	$siswaTingkat = SiswaTingkat::model()->findByAttributes(array("NIS" => $profile[0], "KD_TAHUN_AJARAN" => $this->tahunAjaran));
    	
    	$criteria = new CDbCriteria(array(                    
            'order'=>'KD_TINGKAT_KELAS, KD_PERIODE_BELAJAR desc',
            //'condition'=>'NIS='.$siswaTingkat->NIS.' AND KD_TAHUN_AJARAN='.$siswaTingkat->KD_TAHUN_AJARAN.' AND KD_TINGKAT_KELAS='.$siswaTingkat->KD_TINGKAT_KELAS.' AND KD_ROMBEL='.$siswaTingkat->KD_ROMBEL.' AND KD_PROGRAM_PENGAJARAN='.$siswaTingkat->KD_PROGRAM_PENGAJARAN,
            'condition'=>'NIS='.$profile[0].' AND KD_TINGKAT_KELAS='.$KD_TINGKAT_KELAS.' AND KD_PERIODE_BELAJAR='.$KD_PERIODE_BELAJAR,

    	));

		$dataProvider=new CActiveDataProvider('TNilaiRaporEkstra', array(
	            'criteria'=>$criteria,
	    ));

        $params = array(
            'dataProvider' => $dataProvider,
        );
        $this->renderPartial('/lihatNilai/tabNilaiRaporEkstra', $params, false, true);
    }
    
    public function actionKepribadian($NIS, $KD_TINGKAT_KELAS, $KD_PERIODE_BELAJAR) {
        $profile = $this->getUser();
    	$siswaTingkat = SiswaTingkat::model()->findByAttributes(array("NIS" => $profile[0], "KD_TAHUN_AJARAN" => $this->tahunAjaran));
    	
    	$criteria = new CDbCriteria(array(                    
            'order'=>'KD_TINGKAT_KELAS, KD_PERIODE_BELAJAR desc',
            //'condition'=>'NIS='.$siswaTingkat->NIS.' AND KD_TAHUN_AJARAN='.$siswaTingkat->KD_TAHUN_AJARAN.' AND KD_TINGKAT_KELAS='.$siswaTingkat->KD_TINGKAT_KELAS.' AND KD_ROMBEL='.$siswaTingkat->KD_ROMBEL.' AND KD_PROGRAM_PENGAJARAN='.$siswaTingkat->KD_PROGRAM_PENGAJARAN,
            'condition'=>'NIS='.$profile[0].' AND KD_TINGKAT_KELAS='.$KD_TINGKAT_KELAS.' AND KD_PERIODE_BELAJAR='.$KD_PERIODE_BELAJAR,

    	));

		$dataProvider=new CActiveDataProvider('TNilaiRaporKepribadian', array(
	            'criteria'=>$criteria,
	    ));

        $params = array(
            'dataProvider' => $dataProvider,
        );
        $this->renderPartial('/lihatNilai/tabNilaiRaporKepribadian', $params, false, true);
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
	
//	public function actionView($NIS, $KD_TAHUN_AJARAN, $KD_TINGKAT_KELAS, $KD_PROGRAM_PENGAJARAN, $KD_ROMBEL, $TANGGAL)
//	{		
//		$model=$this->loadModel($NIS, $KD_TAHUN_AJARAN, $KD_TINGKAT_KELAS, $KD_PROGRAM_PENGAJARAN, $KD_ROMBEL, $TANGGAL);
//		$this->render('view',array('model'=>$model));
//	}
	
	public function loadModel($NIS, $KD_TAHUN_AJARAN, $KD_TINGKAT_KELAS, $KD_PROGRAM_PENGAJARAN, $KD_ROMBEL, $KD_KURIKULUM, $KD_PERIODE_BELAJAR, $KD_MATA_PELAJARAN_DIAJARKAN)
	{
		$model=  TNilaiRaporNilai::model()->findByPk(array('NIS'=>$NIS, 'KD_TAHUN_AJARAN'=>$KD_TAHUN_AJARAN, 'KD_TINGKAT_KELAS'=>$KD_TINGKAT_KELAS, 
                    'KD_PROGRAM_PENGAJARAN'=>$KD_PROGRAM_PENGAJARAN, 'KD_ROMBEL'=>$KD_ROMBEL, 'KD_KURIKULUM'=>$KD_KURIKULUM, 'KD_PERIODE_BELAJAR'=>$KD_PERIODE_BELAJAR, 'KD_MATA_PELAJARAN_DIAJARKAN'=>$KD_MATA_PELAJARAN_DIAJARKAN));
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
