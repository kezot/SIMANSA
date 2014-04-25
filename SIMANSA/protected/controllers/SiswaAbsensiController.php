<?php


class SiswaAbsensiController extends Controller {

    public $layout='//layouts/column2';
    public $listMurid = array();
    
    public function actionIndex() {
        $dataProvider=new CActiveDataProvider('SiswaAbsensi');
        $this->render('index', array('dataProvider'=>$dataProvider));
    }
    
    public function listKelas() {
        $kelas = Kelas::model()->findAll(array('order'=>'KD_TINGKAT_KELAS, KD_PROGRAM_PENGAJARAN, KD_ROMBEL'));
        return $kelas;
    }
    
    public function getKelas($id_kelas) {
        $kelas = Kelas::model()->findByPk($id_kelas);
        $listMurid = SiswaTingkat::model()->findByAttributes(
                array("KD_TINGKAT_KELAS"=> $kelas->KD_TINGKAT_KELAS,
                "KD_PROGRAM_PENGAJARAN"=> $kelas->KD_PROGRAM_PENGAJARAN,
                "KD_ROMBEL"=> $kelas->KD_ROMBEL,
                "KD_"    ), array('order' => ''));
        return $listMurid;
    }
    
    public function getNamaSiswa($NIS){
        $namaSiswa = Siswa::model()->findByPK($NIS);
        return $namaSiswa;
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
}
