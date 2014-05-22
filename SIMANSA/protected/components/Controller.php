<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
        
        public $tahunAjaran = "19" ;
        
        public $semester = "2";
	
	public	$user = '';
	public	$profile = '';
	public $nomorPengguna='';
	public $namaPengguna='';

	public function getUser()
	{
		$user = Yii::app()->user->name;
		$arr= array();
		if(!Yii::app()->user->isGuest){
			$profile = User::model()->findByAttributes(array("username"=>$user));
            if($profile->profilSiswa==''){
                $arr[0] = $profile->profilPegawai;
                $pegawai = TPegawai::model()->findByAttributes(array("NIP"=>$arr[0]));
                $arr[1] = $pegawai->NM_PEGAWAI;
            }
            else{
                $arr[0] = $profile->profilSiswa;
                $siswa = Siswa::model()->findByAttributes(array("NIS"=>$arr[0]));
                $arr[1] = $siswa->NM_SISWA;
            }
		}

		return $arr;
    }
        
}