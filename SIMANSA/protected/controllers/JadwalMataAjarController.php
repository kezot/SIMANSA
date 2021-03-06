<?php

class JadwalMataAjarController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
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

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$kelas;
		$jadwal;
		if (!isset($_POST['JadwalMataAjar'])) {
		    $kelas = $_GET['NAMA_KELAS'];
		}

		$model = new JadwalMataAjar;

        if (isset($_POST['ajax']) && $_POST['ajax'] === 'client-account-create-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        if (isset($_POST['JadwalMataAjar'])) {
            //$model->TANGGAL = date('m/d/Y');
            $model->attributes = $_POST['JadwalMataAjar'];
            if ($model->validate()) {
                //$model->TANGGAL = date('Y-m-d', strtotime($model->TANGGAL));
                //$this->saveModel($model);
                $model->save();
                $this->redirect(array('JadwalMataAjar/index', 'id_kelas'=>$model->NAMA_KELAS)); //, 'NIS' => $model->NIS, 'KD_TAHUN_AJARAN' => $model->KD_TAHUN_AJARAN, 'KD_TINGKAT_KELAS' => $model->KD_TINGKAT_KELAS, 'KD_PROGRAM_PENGAJARAN' => $model->KD_PROGRAM_PENGAJARAN, 'KD_ROMBEL' => $model->KD_ROMBEL, 'TANGGAL' => $model->TANGGAL));
            }
        }
        $this->renderPartial('create', array('model' => $model, 'kelas'=>$kelas));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
		public function actionUpdate($NAMA_KELAS, $HARI, $JAM)
		{
			$model = $this->loadModel($NAMA_KELAS, $HARI, $JAM);
	       	$jadwal;
	        if (!isset($_POST['JadwalMataAjar'])) {
	            $jadwal = JadwalMataAjar::model()->findByAttributes(array('NAMA_KELAS' => $NAMA_KELAS, 'HARI' => $HARI, 'JAM' => $JAM));
	        }
	        
	        if (isset($_POST['JadwalMataAjar'])) {
	            $model->attributes = $_POST['JadwalMataAjar'];
	            $this->saveModel($model);
	            $this->redirect(array('JadwalMataAjar/index', 'id_kelas'=>$model->NAMA_KELAS));
	        }

	        $this->renderPartial('update', array(
	            'model' => $model, 'kelas' => $jadwal->NAMA_KELAS, 'hari' => $jadwal->HARI, 'jam' => $jadwal->JAM
	        ));
		}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($NAMA_KELAS, $HARI, $JAM)
	{
		$this->loadModel($NAMA_KELAS, $HARI, $JAM)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('JadwalMataAjar');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new JadwalMataAjar('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['JadwalMataAjar']))
			$model->attributes=$_GET['JadwalMataAjar'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function listKelas() {
	    $kelas = Kelas::model()->findAll(array('order' => 'KD_TINGKAT_KELAS, KD_PROGRAM_PENGAJARAN, KD_ROMBEL'));
	    return $kelas;
	}

	public function getJadwal($id_kelas) {
	    $kelas = Kelas::model()->findByPk($id_kelas);
	    $listJadwal = JadwalMataAjar::model()->findAllByAttributes(
	            array("NAMA_KELAS" => $kelas->KD_KELAS));
	    return $listJadwal;
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return JadwalMataAjar the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($NAMA_KELAS, $HARI, $JAM)
	{
		$model=JadwalMataAjar::model()->findByPk(array('NAMA_KELAS'=>$NAMA_KELAS, 'HARI'=>$HARI, 'JAM'=>$JAM));
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	public function saveModel($model) {
        try {
            $model->save();
        } catch (Exception $e) {

            $this->showError($e);
        }
    }

	/**
	 * Performs the AJAX validation.
	 * @param JadwalMataAjar $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='jadwal-mata-ajar-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	function showError(Exception $e) {
	    if ($e->getCode() == 23000)
	        $message = "This operation is not permitted due to an existing foreign key reference.";
	    else
	        $message = 'Invalid operation.';
	    throw new CHttpException($e->getCode(), $message);
	}
}
