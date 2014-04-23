
<?php
class TSiswaAbsensiController extends Controller
{
	public $layout='//layouts/column2';
	
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
				'expression'=>'$user->isAdmin()'
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'expression'=>'$user->isAdmin()'
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'expression'=>'$user->isAdmin()'
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
				$this->redirect(array('view','nis'=>$model->nis, 'kd_tahun_ajaran'=>$model->kd_tahun_ajaran, 'kd_tingkat_kelas'=>$model->kd_tingkat_kelas, 'kd_program_pengajaran'=>$model->kd_program_pengajaran, 'kd_rombel'=>$model->kd_rombel, 'tanggal'=>$model->tanggal));
	        }
	    }
	    $this->render('create',array('model'=>$model));
	} 
	
	public function actionDelete($nis, $kd_tahun_ajaran, $kd_tingkat_kelas, $kd_program_pengajaran, $kd_rombel, $tanggal)
	{
		if(Yii::app()->request->isPostRequest)
		{
			try
			{
				// we only allow deletion via POST request
				$this->loadModel($nis, $kd_tahun_ajaran, $kd_tingkat_kelas, $kd_program_pengajaran, $kd_rombel, $tanggal)->delete();
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
	
	public function actionUpdate($nis, $kd_tahun_ajaran, $kd_tingkat_kelas, $kd_program_pengajaran, $kd_rombel, $tanggal)
	{
		$model=$this->loadModel($nis, $kd_tahun_ajaran, $kd_tingkat_kelas, $kd_program_pengajaran, $kd_rombel, $tanggal);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['TSiswaAbsensi']))
		{
			$model->attributes=$_POST['TSiswaAbsensi'];
			$this->saveModel($model);
			$this->redirect(array('view',
	                    'nis'=>$model->nis, 'kd_tahun_ajaran'=>$model->kd_tahun_ajaran, 'kd_tingkat_kelas'=>$model->kd_tingkat_kelas, 'kd_program_pengajaran'=>$model->kd_program_pengajaran, 'kd_rombel'=>$model->kd_rombel, 'tanggal'=>$model->tanggal));
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
	
	public function actionView($nis, $kd_tahun_ajaran, $kd_tingkat_kelas, $kd_program_pengajaran, $kd_rombel, $tanggal)
	{		
		$model=$this->loadModel($nis, $kd_tahun_ajaran, $kd_tingkat_kelas, $kd_program_pengajaran, $kd_rombel, $tanggal);
		$this->render('view',array('model'=>$model));
	}
	
	public function loadModel($nis, $kd_tahun_ajaran, $kd_tingkat_kelas, $kd_program_pengajaran, $kd_rombel, $tanggal)
	{
		$model=TSiswaAbsensi::model()->findByPk(array('nis'=>$nis, 'kd_tahun_ajaran'=>$kd_tahun_ajaran, 'kd_tingkat_kelas'=>$kd_tingkat_kelas, 'kd_program_pengajaran'=>$kd_program_pengajaran, 'kd_rombel'=>$kd_rombel, 'tanggal'=>$tanggal));
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
