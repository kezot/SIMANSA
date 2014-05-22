
<?php
class LihatPembayaranController extends Controller
{
	public $layout='//layouts/column2';
	
	public function actionIndex()
	{
		$profile = $this->getUser();

		$criteria = new CDbCriteria(array(                    
                'order'=>'ID_PEMBAYARAN_SISWA desc',
                'condition'=>'NIS='.$profile[0],

        ));

		$dataProvider=new CActiveDataProvider('TSiswaBayar', array(
		            'criteria'=>$criteria,
		    ));


		$model = new TSiswaBayar('search');

		$this->render('index',array(
			'dataProvider'=>$dataProvider, 'model'=>$model,
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
