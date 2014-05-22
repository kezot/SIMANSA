<?php

class ProfilController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';
        public $id = 'profil';

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
				'actions'=>array('create','update','changePassword'),
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

		if(Yii::app()->user->isSiswa()||Yii::app()->user->isOrangTua()){
			$this->render('viewSiswa',array(
			'model'=>$this->loadModel($id)
			));
		}
		else{
			$this->render('viewPegawai',array(
			'model'=>$this->loadModel($id)
			));
		}
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

		if(Yii::app()->user->isSiswa()||Yii::app()->user->isOrangTua()){
			if(isset($_POST['TSiswa']))
			{
				$model->attributes=$_POST['TSiswa'];
				$model->save();
					$this->redirect(array('view','id'=>$model->NIS));
			}

			$this->render('updateSiswa',array(
				'model'=>$model,
			));
		}
		else{
			if(isset($_POST['TPegawai']))
			{
				$model->attributes=$_POST['TPegawai'];
				if($model->save())
					$this->redirect(array('view','id'=>$model->NIP));
			}

			$this->render('updatePegawai',array(
				'model'=>$model,
			));	
		}
	}

	public function actionChangePassword($username)
	{
		// $model=new ChangePasswordForm();
	 //    if (isset($_POST['ChangePasswordForm'])) {
	 //        $model->setAttributes($_POST['ChangePasswordForm']);
	 //        if ($model->validateCurrentPassword()) {
	 //            $model->saveNewPassword();
	 //            $model=$this->loadModel($id);
	 //            if(Yii::app()->user->isSiswa()||Yii::app()->user->isOrangTua()){
	 //            	$this->redirect(array('viewSiswa','id'=>$model->NIS));
	 //            }
	 //            else{
	 //            	$this->redirect(array('viewPegawai','id'=>$model->NIP));
	 //            }
	 //        }
	 //    }

  //   $this->render('changePassword', array('model'=>$model));
		$user = loadModel($id);
	    if(md5($_POST['User']['old_password']) === $user->password)
	    {
	       $user->setScenario('changePassword');
	       $user->attributes = $_POST['User'];                
	       $user->password = md5($_POST['User']['new_password']);
	       if($user->save())
	         Yii::app()->user->setFlash('passChanged', 'Your password has been changed <strong>successfully</strong>.');
	    }            
	    else
	    {
	      Yii::app()->user->setFlash('passChangeError', 'Your password was not changed because it did not matched the <strong>old password</strong>.');                    
	    }  
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{

		$profile = $this->getUser();
		if(Yii::app()->user->isSiswa()||Yii::app()->user->isOrangTua()){
			$this->redirect(array('/profil/view&id='.$profile[0]));
		}
		else{
			$this->redirect(array('/profil/view&id='.$profile[0]));
		}
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new TSiswa('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['TSiswa']))
			$model->attributes=$_GET['TSiswa'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return TSiswa the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=null;
		if(Yii::app()->user->isSiswa()||Yii::app()->user->isOrangTua()){
			$model=TSiswa::model()->findByPk($id);
		}
		else{
			$model=TPegawai::model()->findByPk($id);
		}
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param TSiswa $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='tsiswa-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
