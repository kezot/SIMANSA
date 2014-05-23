
<?php
/* @var $this TPegawaiController */
/* @var $model TPegawai */

$this->breadcrumbs=array(
	'Profil'=>array('index'),
	$model->NM_PEGAWAI,
);


?>

<h1>Profil <?php echo $model->NM_PEGAWAI; ?></h1>

<?php

echo '<a href="' . Yii::app()->request->baseUrl . '/index.php?r=profil/changePassword&username=' .Yii::app()->user->name. '"><button>Ubah Password</button>';
echo '<a href="' . Yii::app()->request->baseUrl . '/index.php?r=profil/update&id=' . $model->NIP. '"><button>Update Profil</button>';

$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'NIP',
		'NOMOR_INDUK',
		'NM_PEGAWAI',
		'INISIAL',
		'KOTA_LAHIR',
		'TANGGAL_LAHIR',
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
		array(
			'label'=>'Gol. Darah',
			'value'=>$model->kDGOLDARAH->NM_GOL_DARAH,
			),
		array(
			'label'=>'Agama',
			'value'=>$model->kDAGAMA->NM_AGAMA,
			),
		'KD_STATUS_NIKAH',
		'ALAMAT',
		'KD_POS',
		'NO_TELP',
		array(
			'label'=>'Jenis Ketenagakerjaan',
			'value'=>$model->kDJENISKETENAGAAN->NM_JENIS_KETENAGAAN,
			),
		'NO_HP',
		'DIR_FOTO',
		'USERNAME',
		'TANGGAL_AKSES',
		'NOMOR_INDUK_BARU',
		'NUPTK',
		'GELAR_DEPAN',
		'GELAR_BELAKANG',
		'NIY_NIGK',
		'NIK',
		'NM_IBU_KANDUNG',
		'RT',
		'RW',
		'KELURAHAN_DESA',
		'KECAMATAN',
		'KABUPATEN_KOTA',
		'PROPINSI',
		'KD_AREA',
		'EMAIL',
		array(
			'label'=>'Status Kepegawaian',
			'value'=>function($model){
			        if ($model->STATUS_KEPEGAWAIAN  == 1){
			            $class = 'PNS';
			        }
			        else if ($model->STATUS_KEPEGAWAIAN  == 2){
			            $class = 'PNS Diperbantukan';
			        }
			        else if ($model->STATUS_KEPEGAWAIAN  == 3){
			            $class = 'PNS Depag';
			        }
			        else if ($model->STATUS_KEPEGAWAIAN  == 4){
			            $class = 'GTY/PTY';
			        }
			        else if ($model->STATUS_KEPEGAWAIAN  == 5){
			            $class = 'GTT/PTT Propinsi';
			        }
			        else if ($model->STATUS_KEPEGAWAIAN  == 6){
			            $class = 'GTT/PTT Kab/Kota';
			        }
			        else if ($model->STATUS_KEPEGAWAIAN  == 7){
			            $class = 'Guru Bantu Pusat';
			        }
			        else if ($model->STATUS_KEPEGAWAIAN  == 8){
			            $class = 'Guru Honor Sekolah';
			        }
			        else {
			        	$class = 'Data tidak ada';
			        }
			        return $class;
			    },
    	),	
		array(
			'label'=>'Sertifikasi Jabatan',
			'value'=>function($model){
			        if ($model->SERTIFIKASI_JABATAN  == 1){
			            $class = 'Belum';
			        }
			        else if ($model->SERTIFIKASI_JABATAN  == 2){
			            $class = 'Sudah';
			        }
			        else if ($model->SERTIFIKASI_JABATAN   == 3){
			            $class = 'Sedang Proses';
			        }
			        else {
			        	$class = 'Data tidak ada';
			        }
			        return $class;
			    },
    	),	
		'TAHUN_SERTIFIKAT_JABATAN',
		'NOMOR_SERTIFIKAT_JABATAN',
		'KD_SERTIFIKASI_BIDANG_STUDI',
		'KD_PROGRAM_KEAHLIAN',
		'LISENSI_KEPALA_SEKOLAH',
		'CATATAN',
	),
)); ?>
