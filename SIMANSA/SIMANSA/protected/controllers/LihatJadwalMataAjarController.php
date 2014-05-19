<?php

class LihatJadwalMataAjarController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
        
        public function getJadwalMataAjar($hari, $jamKe, $kelas){
            $jadwal = JadwalMataAjar::model()->findByAttributes(
                    array("NAMA_KELAS"=> $kelas, "HARI"=> $hari, "JAM" =>$jamKe));
            return $jadwal;
        }
}