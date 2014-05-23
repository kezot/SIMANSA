
<?php
/* @var $this TSiswaController */
/* @var $model TSiswa */

$this->breadcrumbs=array(
	'Profil'=>array('index'),
	$model->NM_SISWA,
);

// $this->menu=array(
// 	array('label'=>'List TSiswa', 'url'=>array('index')),
// 	array('label'=>'Create TSiswa', 'url'=>array('create')),
// 	array('label'=>'Update TSiswa', 'url'=>array('update', 'id'=>$model->NIS)),
// 	array('label'=>'Delete TSiswa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->NIS),'confirm'=>'Are you sure you want to delete this item?')),
// 	array('label'=>'Manage TSiswa', 'url'=>array('admin')),
// );
?>

<h1>Profil <?php echo $model->NM_SISWA; ?></h1>

<?php

echo '<a href="' . Yii::app()->request->baseUrl . '/index.php?r=user/updatePassword&username=' .Yii::app()->user->name. '"><button>Ubah Password</button>';
echo '<a href="' . Yii::app()->request->baseUrl . '/index.php?r=profil/update&id=' . $model->NIS. '"><button>Ubah Profil</button>';

$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'NIS',
		'NO_CALSIS',
		'NM_SISWA',
		'NM_PANGGILAN',
		array(
			'label'=>'Jenis Kelamin',
			'value'=>function($model){
			        if ($model->KD_JENIS_KELAMIN  == 1){
			            $class = 'Laki-Laki';
			        }
			        else if ($model->KD_JENIS_KELAMIN  == 2){
			            $class = 'Perempuan';
			        }
			        else {
			        	$class = 'Data tidak ada';
			        }
			        return $class;
			    },
    	),
		'KOTA_LAHIR',
		'TANGGAL_LAHIR',
		'ALAMAT',
		'RT',
		'RW',
		'KD_POS',
		array(
			'label'=>'Gol. Darah',
			'value'=>$model->kDGOLDARAH->NM_GOL_DARAH,
			),
		array(
			'label'=>'Agama',
			'value'=>$model->kDAGAMA->NM_AGAMA,
			),
		'NO_TELP',
		'NO_HP',
		'STATUS_SISWA',
		'KEWARGANEGARAAN',
		'ANAK_KE',
		'JUMLAH_KANDUNG',
		'JUMLAH_TIRI',
		'JUMLAH_ANGKAT',
		'STATUS_YATIM_PIATU',
		'BAHASA',
		'KELAINAN_JASMANI',
		'BERAT_BADAN',
		'TINGGI_BADAN',
		array(
			'label'=>'Asal SMP',
			'value'=>(is_null($model->ASAL_SMP))? 'Data tidak ada' : $model->aSALSMP->NM_SEKOLAH,
			),
		'NO_STL_SMP',
		'TANGGAL_STL_SMP',
		'LAMA_BELAJAR_SMP',
		array(
			'label'=>'Asal SMA',
			'value'=>(is_null($model->ASAL_SMA))? 'Data tidak ada' : $model->aSALSMA->NM_SEKOLAH,
			),
		array(
			'label'=>'Tingkat Kelas',
			'value'=>$model->kDTINGKATKELAS->NM_TINGKAT_KELAS,
			),
		array(
			'label'=>'Program Pengajaran',
			'value'=>$model->kDPROGRAMPENGAJARAN->NM_PROGRAM_PENGAJARAN,
			),
		'DITERIMA_TANGGAL',
		'PINDAH_ALASAN',
		'HUBUNGI',
		'TANGGUNG_BIAYA',
		'TEMP_AKSES_NET',
		'FREK_AKSES_NET',
		'FREK_REKRE_KEL',
		'NILAI',
		'NO_INDUK',
		'DIR_FOTO',
		'STATUS_ENTRI',
		array(
			'label'=>'Jenis Ketunaan',
			'value'=> (is_null($model->KD_JENIS_KETUNAAN)) ? 'Data tidak ada' : $model->kDJENISKETUNAAN->NM_JENIS_KETUNAAN,
			),
		array(
			'label'=>'Status Anak',
			'value'=>function($model){
			        if ($model->KD_STATUS_DALAM_KELUARGA  == 1){
			            $class = 'Anak Kandung';
			        }
			        else if ($model->KD_STATUS_DALAM_KELUARGA  == 2){
			            $class = 'Anak Tiri';
			        }
			        else if ($model->KD_STATUS_DALAM_KELUARGA  == 3){
			            $class = 'Anak Angkat';
			        }
			        else {
			        	$class = 'Data tidak ada';
			        }
			        return $class;
			    },
    	),
		'TANGGAL_SKHUN_SMP',
		'NO_SKHUN_SMP',
		'NISN',
		'NIK',
		array(
			'label'=>'Tempat Tinggal',
			'value'=>function($model){
			        if ($model->JENIS_TINGGAL  == 1){
			            $class = 'Bersama Orangtua';
			        }
			        else if ($model->JENIS_TINGGAL  == 2){
			            $class = 'Wali';
			        }
			        else if ($model->JENIS_TINGGAL  == 3){
			            $class = 'Kost';
			        }
			        else if ($model->JENIS_TINGGAL  == 4){
			            $class = 'Asrama';
			        }
			        else if ($model->JENIS_TINGGAL  == 5){
			            $class = 'Panti Asuhan';
			        }
			        else if ($model->JENIS_TINGGAL  == 9){
			        	$class = 'Lainnya';
			        }
			        else {
			        	$class = 'Data tidak ada';
			        }
			        return $class;
			    },
    	),
		'KELURAHAN_DESA',
		'KECAMATAN',
		'KABUPATEN_KOTA',
		'PROPINSI',
		'KD_AREA',
		array(
			'label'=>'Jarak Ke Sekolah',
			'value'=>function($model){
			        if ($model->KD_JARAK_SEK  == 1){
			            $class = 'Kurang dari 1 Km';
			        }
			        else if ($model->KD_JARAK_SEK  == 2){
			            $class = 'Lebih dari 1 Km';
			        }
			        else {
			        	$class = 'Data tidak ada';
			        }
			        return $class;
			    },
    	),
		array(
			'label'=>'Alat Transportasi',
			'value'=>function($model){
			        if ($model->ALAT_TRANSPORTASI  == '01'){
			            $class = 'Jalan Kaki';
			        }
			        else if ($model->ALAT_TRANSPORTASI  == '02'){
			            $class = 'Kendaraan Pribadi';
			        }
			        else if ($model->ALAT_TRANSPORTASI  == '03'){
			            $class = 'Kendaraan Umum';
			        }
			        else if ($model->ALAT_TRANSPORTASI  == '04'){
			            $class = 'Jemputan Sekolah';
			        }
			        else if ($model->ALAT_TRANSPORTASI  == '05'){
			            $class = 'Kereta Api';
			        }
			        else if ($model->JENIS_TINGGAL  == '06'){
			        	$class = 'Ojek';
			        }
			        else {
			        	$class = 'Data tidak ada';
			        }
			        return $class;
			    },
    	),
		'EMAIL_PRIBADI',
	),
)); ?>
