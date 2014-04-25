
<?php
class TSiswaBayarController extends Controller
{
	public $layout='//layouts/column2';
	
        public $id = 'pembayaransiswa';
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('TSiswaBayar');
		$this->render('index',array(
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

	public function actionCreate()
	{
	    $model=new TSiswaBayar;

	    if(isset($_POST['ajax']) && $_POST['ajax']==='client-account-create-form')
	    {
	        echo CActiveForm::validate($model);
	        Yii::app()->end();
	    }

	    if(isset($_POST['TSiswaBayar']))
	    {
	        $model->attributes=$_POST['TSiswaBayar'];
	        if($model->validate())
	        {
				$this->saveModel($model);
				$this->redirect(array('view','NIS'=>$model->NIS, 'KD_TAHUN_AJARAN'=>$model->KD_TAHUN_AJARAN, 'KD_TINGKAT_KELAS'=>$model->KD_TINGKAT_KELAS, 'KD_PROGRAM_PENGAJARAN'=>$model->KD_PROGRAM_PENGAJARAN, 'KD_ROMBEL'=>$model->KD_ROMBEL, 'ID_PEMBAYARAN_SISWA'=>$model->ID_PEMBAYARAN_SISWA, 'TANGGAL_BAYAR'=>$model->TANGGAL_BAYAR));
	        }
	    }
	    $this->render('create',array('model'=>$model));
	} 
	
	public function actionDelete($NIS, $KD_TAHUN_AJARAN, $KD_TINGKAT_KELAS, $KD_PROGRAM_PENGAJARAN, $KD_ROMBEL, $ID_PEMBAYARAN_SISWA, $TANGGAL_BAYAR)
	{
		if(Yii::app()->request->isPostRequest)
		{
			try
			{
				// we only allow deletion via POST request
				$this->loadModel($NIS, $KD_TAHUN_AJARAN, $KD_TINGKAT_KELAS, $KD_PROGRAM_PENGAJARAN, $KD_ROMBEL, $ID_PEMBAYARAN_SISWA, $TANGGAL_BAYAR)->delete();
			}
			catch(Exception $e) 
			{
				$this->showError($e);
			}

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}
	
	public function actionUpdate($NIS, $KD_TAHUN_AJARAN, $KD_TINGKAT_KELAS, $KD_PROGRAM_PENGAJARAN, $KD_ROMBEL, $ID_PEMBAYARAN_SISWA, $TANGGAL_BAYAR)
	{
		$model=$this->loadModel($NIS, $KD_TAHUN_AJARAN, $KD_TINGKAT_KELAS, $KD_PROGRAM_PENGAJARAN, $KD_ROMBEL, $ID_PEMBAYARAN_SISWA, $TANGGAL_BAYAR);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['TSiswaBayar']))
		{
			$model->attributes=$_POST['TSiswaBayar'];
			$this->saveModel($model);
			$this->redirect(array('view',
	                    'NIS'=>$model->NIS, 'KD_TAHUN_AJARAN'=>$model->KD_TAHUN_AJARAN, 'KD_TINGKAT_KELAS'=>$model->KD_TINGKAT_KELAS, 'KD_PROGRAM_PENGAJARAN'=>$model->KD_PROGRAM_PENGAJARAN, 'KD_ROMBEL'=>$model->KD_ROMBEL, 'ID_PEMBAYARAN_SISWA'=>$model->ID_PEMBAYARAN_SISWA, 'TANGGAL_BAYAR'=>$model->TANGGAL_BAYAR));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
	
	public function actionAdmin()
	{
		$model=new TSiswaBayar('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['TSiswaBayar']))
			$model->attributes=$_GET['TSiswaBayar'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	
	public function actionView($NIS, $KD_TAHUN_AJARAN, $KD_TINGKAT_KELAS, $KD_PROGRAM_PENGAJARAN, $KD_ROMBEL, $ID_PEMBAYARAN_SISWA, $TANGGAL_BAYAR)
	{		
		$model=$this->loadModel($NIS, $KD_TAHUN_AJARAN, $KD_TINGKAT_KELAS, $KD_PROGRAM_PENGAJARAN, $KD_ROMBEL, $ID_PEMBAYARAN_SISWA, $TANGGAL_BAYAR);
		$this->render('view',array('model'=>$model));
	}
	
	public function loadModel($NIS, $KD_TAHUN_AJARAN, $KD_TINGKAT_KELAS, $KD_PROGRAM_PENGAJARAN, $KD_ROMBEL, $ID_PEMBAYARAN_SISWA, $TANGGAL_BAYAR)
	{
		$model=TSiswaBayar::model()->findByPk(array('NIS'=>$NIS, 'KD_TAHUN_AJARAN'=>$KD_TAHUN_AJARAN, 'KD_TINGKAT_KELAS'=>$KD_TINGKAT_KELAS, 'KD_PROGRAM_PENGAJARAN'=>$KD_PROGRAM_PENGAJARAN, 'KD_ROMBEL'=>$KD_ROMBEL, 'ID_PEMBAYARAN_SISWA'=>$ID_PEMBAYARAN_SISWA, 'TANGGAL_BAYAR'=>$TANGGAL_BAYAR));
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
