
<?php
class TSiswaAbsensiController extends Controller
{
	public $layout='//layouts/column2';
	public $id = 'absensi';
        
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('TSiswaAbsensi');
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
	    $model=new TSiswaAbsensi;

	    if(isset($_POST['ajax']) && $_POST['ajax']==='client-account-create-form')
	    {
	        echo CActiveForm::validate($model);
	        Yii::app()->end();
	    }

	    if(isset($_POST['TSiswaAbsensi']))
	    {
	        $model->attributes=$_POST['TSiswaAbsensi'];
	        if($model->validate())
	        {
				$this->saveModel($model);
				$this->redirect(array('view','NIS'=>$model->NIS, 'KD_TAHUN_AJARAN'=>$model->KD_TAHUN_AJARAN, 'KD_TINGKAT_KELAS'=>$model->KD_TINGKAT_KELAS, 'KD_PROGRAM_PENGAJARAN'=>$model->KD_PROGRAM_PENGAJARAN, 'KD_ROMBEL'=>$model->KD_ROMBEL, 'TANGGAL'=>$model->TANGGAL));
	        }
	    }
	    $this->render('create',array('model'=>$model));
	} 
	
	public function actionDelete($NIS, $KD_TAHUN_AJARAN, $KD_TINGKAT_KELAS, $KD_PROGRAM_PENGAJARAN, $KD_ROMBEL, $TANGGAL)
	{
		if(Yii::app()->request->isPostRequest)
		{
			try
			{
				// we only allow deletion via POST request
				$this->loadModel($NIS, $KD_TAHUN_AJARAN, $KD_TINGKAT_KELAS, $KD_PROGRAM_PENGAJARAN, $KD_ROMBEL, $TANGGAL)->delete();
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
	
	public function actionUpdate($NIS, $KD_TAHUN_AJARAN, $KD_TINGKAT_KELAS, $KD_PROGRAM_PENGAJARAN, $KD_ROMBEL, $TANGGAL)
	{
		$model=$this->loadModel($NIS, $KD_TAHUN_AJARAN, $KD_TINGKAT_KELAS, $KD_PROGRAM_PENGAJARAN, $KD_ROMBEL, $TANGGAL);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['TSiswaAbsensi']))
		{
			$model->attributes=$_POST['TSiswaAbsensi'];
			$this->saveModel($model);
			$this->redirect(array('view',
	                    'NIS'=>$model->NIS, 'KD_TAHUN_AJARAN'=>$model->KD_TAHUN_AJARAN, 'KD_TINGKAT_KELAS'=>$model->KD_TINGKAT_KELAS, 'KD_PROGRAM_PENGAJARAN'=>$model->KD_PROGRAM_PENGAJARAN, 'KD_ROMBEL'=>$model->KD_ROMBEL, 'TANGGAL'=>$model->TANGGAL));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
	
	public function actionAdmin()
	{
		$model=new TSiswaAbsensi('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['TSiswaAbsensi']))
			$model->attributes=$_GET['TSiswaAbsensi'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	
	public function actionView($NIS, $KD_TAHUN_AJARAN, $KD_TINGKAT_KELAS, $KD_PROGRAM_PENGAJARAN, $KD_ROMBEL, $TANGGAL)
	{		
		$model=$this->loadModel($NIS, $KD_TAHUN_AJARAN, $KD_TINGKAT_KELAS, $KD_PROGRAM_PENGAJARAN, $KD_ROMBEL, $TANGGAL);
		$this->render('view',array('model'=>$model));
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
