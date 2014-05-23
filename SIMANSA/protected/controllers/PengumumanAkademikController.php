<?php

class PengumumanAkademikController extends Controller
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
				'actions'=>array('create','update','delete'),
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
	public function actionCreate() {

        $model = new PengumumanAkademik;

        if (isset($_POST['ajax']) && $_POST['ajax'] === 'client-account-create-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        if (isset($_POST['PengumumanAkademik'])) {
            //$model->TANGGAL = date('m/d/Y');
            $model->attributes = $_POST['PengumumanAkademik'];
            if ($model->validate()) {
                //$model->TANGGAL = date('Y-m-d', strtotime($model->TANGGAL));
                $this->saveModel($model);
                //$model->save();
                $this->redirect(array('index')); //, 'NIS' => $model->NIS, 'KD_TAHUN_AJARAN' => $model->KD_TAHUN_AJARAN, 'KD_TINGKAT_KELAS' => $model->KD_TINGKAT_KELAS, 'KD_PROGRAM_PENGAJARAN' => $model->KD_PROGRAM_PENGAJARAN, 'KD_ROMBEL' => $model->KD_ROMBEL, 'TANGGAL' => $model->TANGGAL));
            }
        }
        $this->renderPartial('create', array('model' => $model));
    }

	public function getPengumuman()
	{
		$listPengumuman = PengumumanAkademik::model()->findAll();

		return $listPengumuman;
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['PengumumanAkademik']))
		{
			$model->attributes=$_POST['PengumumanAkademik'];
			$this->saveModel($model);
			$this->redirect(array('pengumumanAkademik/index'));
		}

		$this->renderPartial('update', array(
        'model' => $model
        ));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$id = $_GET['id'];
        $this->loadModel($id)->delete();
        $this->redirect(array('/pengumumanAkademik/index'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('PengumumanAkademik');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new PengumumanAkademik('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['PengumumanAkademik']))
			$model->attributes=$_GET['PengumumanAkademik'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return PengumumanAkademik the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=PengumumanAkademik::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	public function saveModel($model) {
        try {
            $model->save();
        } catch (Exception $e) {

            //$this->showError($e);
        }
    }

	/**
	 * Performs the AJAX validation.
	 * @param PengumumanAkademik $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='pengumuman-akademik-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
